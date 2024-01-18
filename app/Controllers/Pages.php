<?php

namespace App\Controllers;

use App\Models\filmModel;
use App\Models\achatModel;

use App\Controllers\DisplayStrategies\ConnectedUserDisplayStrategy;
use App\Controllers\DisplayStrategies\AlreadyBuyedDisplaystrategy;
use App\Controllers\DisplayStrategies\GuestUserDisplayStrategy;
use App\Controllers\DisplayStrategies\ButtonDisplayStrategy;

class Pages extends BaseController
{

    protected filmModel $filmModel;
    private achatModel $achatModel;

    public function __construct()
    {
        $this->filmModel = new filmModel();
        $this->achatModel = achatModel::getInstance();
    }

    public function index()
    {
        $data['series'] = $this->filmModel->getSeries();
        $data['filmsAventure'] = $this->filmModel->getFilmsAventure();
        $data['filmsScienceFiction'] = $this->filmModel->getFilmScienceFiction();
        //echo view('header');
        //return view('accueil', $data);
        echo view('accueil', $data);
    }

    public function filmFocused($id)
    {
        $session = session();
        $filmOwned = false;

        // Vérifier si la clé 'user' existe dans la session et n'est pas null
        if ($session->has('user') && $session->get('user') !== null) {
            $id_user = $session->get('user')['id_user'];
            $filmOwned = $this->achatModel->utilisateurPossedeFilm($id_user, $id);

            // Si l'utilisateur possède le film, on n'affiche pas le bouton acheter
            if ($filmOwned) {
                $strategy = new AlreadyBuyedDisplaystrategy();
            } else { // Sinon, on afficher le bouton qui permet d'acheter le film
                $strategy = new ConnectedUserDisplayStrategy();
            }

        } else {
            $strategy = new GuestUserDisplayStrategy();
        }

        $film = $this->filmModel->find($id);
        if ($film === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film not found');
        }

        $filmGenre = $this->filmModel->getFilmByGenre($film['genre'], 4, $id);


        return view('filmFocused', [
            'film' => $film,
            'filmGenre' => $filmGenre,
            'buttonDisplayStrategy' => $strategy,
            'filmOwned' => $filmOwned
        ]);
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return view('pages/' . $page);
    }
}
