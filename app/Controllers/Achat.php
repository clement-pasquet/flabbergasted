<?php

namespace App\Controllers;

use App\Models\UserModel;

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


        $userModel = new UserModel();
//         $filmModel = new filmModel();

//         $filmCompared = $filmModel->getFilmById($id_film);
        $userCompared = $userModel->getUser($id_user);

        // Nous vérifions si l'utilisateur existe bel et bien
        if (!isset($userCompared)) {
            $session = session();
            $session->setFlashdata('error', 'L utilisateur n existe pas.');

            return redirect()->to(base_url( '/'));
        }

//         // Nous vérifions si le film existe bel et bien
//         if (!isset($filmCompared)) {
//             $session = session();
//             $session->setFlashdata('error', 'Le film n existe pas.');
//
//             return redirect()->to(base_url( '/'));
//         }

        // Utilisation de la procédure stocké ajouterAchat avec comme paramètres id_user et id_film
        $query = "CALL ajouterAchat(?, ?)";
        $this->db->query($query, [$id_user, $id_film]);

        return redirect()->to(base_url('/'));
    }

}
