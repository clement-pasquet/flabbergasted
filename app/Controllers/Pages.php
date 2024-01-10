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
        return view('accueil', $data);
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
