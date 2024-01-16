<?php

namespace App\Controllers\DisplayStrategies;

class ConnectedUserDisplayStrategy implements ButtonDisplayStrategy
{
    public function displayButton($film, $user)
    {

        $html = '<form action="' . base_url('payement') . '" method="post">';
        $html .= '<input type="hidden" name="id_film" value="' . $film['id_film'] . '">';
        $html .= '<input type="hidden" name="titre" value="' . $film['titre'] . '">';
        $html .= '<input type="hidden" name="date_release" value="' . $film['date_release'] . '">';
        $html .= '<input type="hidden" name="image" value="' . $film['image'] . '">';
        $html .= '<input type="hidden" name="prix" value="' . $film['prix'] . '">';
        $html .= '<input type="hidden" name="genre" value="' . $film['genre'] . '">';
        $html .= '<input type="hidden" name="realisateur" value="' . $film['realisateur'] . '">';
        $html .= '<input type="hidden" name="synopsis" value="' . $film['synopsis'] . '">';
        $html .= '<input type="hidden" name="duree" value="' . $film['duree'] . '">';
        $html .= '<input type="hidden" name="pays" value="' . $film['pays'] . '">';
        $html .= '<input type="hidden" name="est_serie" value="' . $film['est_serie'] . '">';
        $html .= '<input type="hidden" name="lien_trailer" value="' . $film['lien_trailer'] . '">';
        $html .= '<input type="hidden" name="likes" value="' . $film['likes'] . '">';

        // Envoie de l'id de l'user pour pouvoir vérifier si l'utilisateur a déjà acheté le film
        $html .= '<input type="hidden" name="id_user" value="' . $user['id_user'] . '">';

        // Bouton d'achat
        $html .= '<button type="submit" class="updateButton">';
        $html .= '<p class="nunito updateButtonText">Acheter</p>';
        $html .= '</button>';
        $html .= '</form>';

        return $html;
    }
}
