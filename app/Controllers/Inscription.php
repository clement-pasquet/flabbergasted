<?php

namespace App\Controllers;

class Inscription extends BaseController
{
    public function sauvegarder()
    {
        // Récupérez les données du formulaire
        $pseudo = $this->request->getPost('pseudo');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passwordConfirmation = $this->request->getPost('passwordConfirmation');
        $checkboxState = $this->request->getPost('checkbox');


        echo "Nom d'utilisateur : " . $pseudo . "<br>";
        echo "Adresse e-mail : " . $email . "<br>";
        echo "Mot de passe : " . $password . "<br>";
        echo "Mot de passe de Confirmation" . $passwordConfirmation . "<br>";
        echo "Etat de la checkbox : " . $checkboxState . "<br>";




        $user = new User();

        // Définir les informations de l'utilisateur
        $user->setMail($email);
        $user->setUsername($pseudo);
        $user->setPassword($password); // Utilisez une méthode sécurisée pour définir le mot de passe





        // Effectuez ici votre logique de sauvegarde dans la base de données ou tout autre traitement nécessaire

        // Redirigez l'utilisateur après la sauvegarde
//        return redirect()->to('page_de_confirmation');
    }
}
