<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\achatModel;

class Achat extends BaseController
{
    protected $db; // Assurez-vous que la propriété $db est définie dans votre contrôleur

    public function __construct()
    {
        // Charge la bibliothèque de base de données dans le constructeur du contrôleur
        $this->db = \Config\Database::connect();
    }

    // Rajout d'un achat à la table achat grace à un id_user et id_film donnés en post
    public function setAchat()
    {
        // Récupérez les données du formulaire
        $id_film = $this->request->getPost('id_film');
        $id_user = $this->request->getPost('id_user');

        // Nous vérifions si l'utilisateur est connecté
        if (empty($id_user)) {
            $session = session();
            $session->setFlashdata('error', 'L utilisateur n\'est pas connecté pas.');

            return redirect()->to(base_url( '/accountConnection'));
        }


        $userModel = new UserModel();

        $userCompared = $userModel->getUser($id_user);

        // Nous vérifions si l'utilisateur existe bel et bien
        if (!isset($userCompared)) {
            $session = session();
            $session->setFlashdata('error', 'L utilisateur n\'existe pas.');

            return redirect()->to(base_url( '/'));
        }


        // Utilisation de la procédure stocké ajouterAchat avec comme paramètres id_user et id_film
        $query = "CALL ajouterAchat(?, ?)";
        $this->db->query($query, [$id_user, $id_film]);

        return redirect()->to(base_url('/'));
    }


    // Fonction regardant dans la table achat pour récupérer les id des films achetés par l'utilisateur pour les afficher dans yourMovies
    public function getFilmByuser_id()
    {
        $session = session();

        // Vérifier si l'utilisateur est connecté
        if (!session()->has('user')) {
            // Rediriger l'utilisateur vers la page de connexion ou afficher un message d'erreur
            return redirect()->to(base_url('/accountConnection'));
        }

        // Récupére l'id de l'utilisateur à partir de la session
        $id_user = $session->get('user')['id_user'];


        // Obtenir une instance unique du modèle AchatModel
        $achatModel = achatModel::getInstance();

        $filmIds = $achatModel->getFilmIdsByUserId($id_user);

        $filmList = [];
        $serieFilm = [];


        foreach ($filmIds as $filmId) {
            // Utilise la procédure stockée getFilmById pour obtenir les détails du film
            $queryGetFilm = "CALL getFilmById(?)";
            $resultGetFilm = $this->db->query($queryGetFilm, [$filmId['id_film']]);
            $currentFilm = $resultGetFilm->getRowArray();

            // Si la récupération du film grâce à son id a fonctionnée
            if ($currentFilm) {
                // Différencie les films des séries
                if ($currentFilm['est_serie'] == 1) {
                    $serieFilm[] = $currentFilm; // Ajoute à la liste des séries
                } else {
                    $filmList[] = $currentFilm; // Ajoute à la liste des films
                }
            }
        }

        // Passe les détails des films et des séries à la vue pour affichage

        return view('pages/yourMovies', ['films' => $filmList, 'series' => $serieFilm]);
    }
}
