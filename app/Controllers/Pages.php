<?php

namespace App\Controllers;
use App\Models\filmModel;


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
        $data['main_content'] = 'accueil';
        echo view('pages/template', $data);
    }

    public function filmFocused($id)
    {
        $film = $this->filmModel->find($id);
        if ($film === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film not found');
        }
        $filmGenre = $this->filmModel->getFilmByGenre($film['genre'], 4);
        return view('filmFocused', ['film' => $film, 'filmGenre' => $filmGenre]);
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
