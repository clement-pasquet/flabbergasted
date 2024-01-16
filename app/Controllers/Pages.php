<?php

namespace App\Controllers;

use App\Models\filmModel;

use App\Controllers\DisplayStrategies\ConnectedUserDisplayStrategy;
use App\Controllers\DisplayStrategies\GuestUserDisplayStrategy;
use App\Controllers\DisplayStrategies\ButtonDisplayStrategy;

class Pages extends BaseController
{

    protected filmModel $filmModel;

    public function __construct()
    {
        $this->filmModel = new filmModel();
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

        // Vérifier si la clé 'user' existe dans la session et n'est pas null
        if ($session->has('user') && $session->get('user') !== null) {
            $id_user = $session->get('user')['id_user'];

            $strategy = new ConnectedUserDisplayStrategy();
        } else {
            $strategy = new GuestUserDisplayStrategy();
        }

        $film = $this->filmModel->find($id);
        if ($film === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film not found');
        }

        $filmGenre = $this->filmModel->getFilmByGenre($film['genre'], 4);


        return view('filmFocused', [
            'film' => $film,
            'filmGenre' => $filmGenre,
            'buttonDisplayStrategy' => $strategy,
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
