<?php

namespace App\Controllers;

use App\Models\filmModel;

class Film extends BaseController
{
    protected $db; // Assurez-vous que la propriété $db est définie dans votre contrôleur

    public function __construct()
    {
        // Charge la bibliothèque de base de données dans le constructeur du contrôleur
        $this->db = \Config\Database::connect();
    }

    // Gestion de la gestion du formulaire de conn de AccountCreate
    public function chercher()
    {
        // Récupérez les données du formulaire
        $wordSearch = $this->request->getPost('titre');

        // Création d'un instance du modèle filmModel
        $filmInstance = new filmModel();

        // je regarde si le film est dans la bd
        $filmResultat = $filmInstance->getFilmByTitle($wordSearch);
        return view('pages/resultSearch', ['films' => $filmResultat]);
    }
}
