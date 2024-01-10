<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('accueil');
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
