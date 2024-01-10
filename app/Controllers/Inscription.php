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

    // Gestion de la gestion du formulaire d'inscription de AccountCreate
    public function sauvegarder()
    {
        // Récupérez les données du formulaire
        $pseudo = $this->request->getPost('pseudo');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passwordConfirmation = $this->request->getPost('passwordConfirmation');

        if ($password != $passwordConfirmation) {
            $session = session();
            $session->setFlashdata('error', 'Une erreur est survenue lors de l\'enregistrement.');

            // Redirection vers la page précédente (le formulaire)
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

    // Gestion de la gestion du formulaire de conn de AccountCreate
    public function connecter()
    {
        // Récupérez les données du formulaire
        $pseudoAndMail = $this->request->getPost('pseudoAndMail');
        $password = $this->request->getPost('password');
        $checkbox = $this->request->getPost('checkbox');

        // Création d'une instance du modèle UserModel
        $userModel = new UserModel();

        $user = $userModel->getUserByUsernameOrEmail($pseudoAndMail);

        if ($user && password_verify($password, $user['password'])) {
            // Les informations de connexion sont correctes
            // Gestion de la connexion de l'utilisateur, en utilisant les sessions

            $session = session();
            $session->set('user', $user);

            // Redirection vers la page d'accueil
            return redirect()->to(base_url('/'));
        } else {
            // Les informations de connexion sont incorrectes
            // Redirection vers la page de connexion avec un message d'erreur
            $session = session();
            $session->setFlashdata('error', 'Identifiants incorrects.');

            return redirect()->to(base_url('/accountConnection'));
        }

    }


}
