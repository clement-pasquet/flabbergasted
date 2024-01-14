<?php

namespace App\Controllers;

use App\Models\UserModel;

class Likes extends BaseController
{
    protected $db; // Assurez-vous que la propriété $db est définie dans votre contrôleur

    public function __construct()
    {
        // Charge la bibliothèque de base de données dans le constructeur du contrôleur
        $this->db = \Config\Database::connect();
    }

    // Rajout un like à un film et dans table likes
    public function liker()
    {
        $id_film = $this->request->getGet('id_film');
        $session = session();

        // Vérifiez d'abord si la clé 'user' existe dans la session
        if ($session->has('user')) {
            $id_user = $session->get('user')['id_user'];

            // Appeler la nouvelle procédure stockée pour liker/déliker un film
            $this->db->query("CALL like_movie(?, ?)", [$id_film, $id_user]);

            return redirect()->to(base_url('filmFocused/'.$id_film)); // Redirigez vers une autre page après le traitement.
        } else {
            // Gérez le cas où la clé 'user' n'existe pas dans la session
            // Vous pouvez rediriger l'utilisateur vers une page de connexion ou effectuer d'autres actions nécessaires.
            // Par exemple :
            return redirect()->to(base_url('/accountConnection'));
        }
    }



}
