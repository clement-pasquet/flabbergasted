<?php
// GuestUserDisplayStrategy.php

namespace App\Controllers\DisplayStrategies;

class AlreadyBuyedDisplaystrategy implements ButtonDisplayStrategy
{
    // Si l'utilisateur a déjà acheté le film, le bouton achat n'existe pas, nous renvoyons donc quelque chose de vide
    public function displayButton($film = null, $user = null)
    {

    }
}
