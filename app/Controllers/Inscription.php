<?php

namespace App\Controllers;

use App\Models\UserModel;

class Inscription extends BaseController
{
    protected $db; // Assurez-vous que la propriété $db est définie dans votre contrôleur

    public function __construct()
    {
        // Charge la bibliothèque de base de données dans le constructeur du contrôleur
        $this->db = \Config\Database::connect();
    }

    public function sauvegarder()
    {
        // Récupérez les données du formulaire
        $pseudo = $this->request->getPost('pseudo');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passwordConfirmation = $this->request->getPost('passwordConfirmation');

        if ($password != $passwordConfirmation) {
            return redirect()->to(base_url('/accountCreate'));
        }
        // Création d'une instance du modèle UserModel
        $userModel = new UserModel();

        // Préparation des données à insérer dans la base de données
        $userData = [
            'mail' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT), // Hash du mot de passe
            'status' => 'adherent',
            'username' => $pseudo,
            'nom' => '',
            'prenom' => '',
        ];

        // Insertion des données dans la base de données via le modèle UserModel
        $inserted = $userModel->insert($userData);

        if ($inserted) { // Si l'insertion est réussi on redirige a la page d'accueil
            return redirect()->to(base_url('/'));
        } else {
            return redirect()->to(base_url('/accountCreate'));
        }
    }
}
