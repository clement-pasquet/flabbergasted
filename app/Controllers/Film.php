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

    // Nouvelle méthode pour passer à la page de paiement avec les détails du film
    public function payement()
    {
        // Récupérez les données du formulaire
        $id_film = $this->request->getPost('id_film');
        $titre = $this->request->getPost('titre');
        $date_release = $this->request->getPost('date_release');
        $image = $this->request->getPost('image');
        $prix = $this->request->getPost('prix');
        $genre = $this->request->getPost('genre');
        $realisateur = $this->request->getPost('realisateur');
        $synopsis = $this->request->getPost('synopsis');
        $duree = $this->request->getPost('duree');
        $pays = $this->request->getPost('pays');
        $est_serie = $this->request->getPost('est_serie');
        $lien_trailer = $this->request->getPost('lien_trailer');
        $likes = $this->request->getPost('likes');
        // Ajoutez d'autres champs selon votre structure de base de données

        // Création de la variable $film
        $film = [
            'id_film' => $id_film,
            'titre' => $titre,
            'date_release' => $date_release,
            'image' => $image,
            'prix' => $prix,
            'genre' => $genre,
            'realisateur' => $realisateur,
            'synopsis' => $synopsis,
            'duree' => $duree,
            'pays' => $pays,
            'est_serie' => $est_serie,
            'lien_trailer' => $lien_trailer,
            'likes' => $likes,
        ];

        // Chargez la vue de la page de paiement avec la variable $film
        return view('pages/pagePaiement', ['film' => $film]);
    }
}
