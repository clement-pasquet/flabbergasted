<?php
// GuestUserDisplayStrategy.php

namespace App\Controllers\DisplayStrategies;

class GuestUserDisplayStrategy implements ButtonDisplayStrategy
{
    public function displayButton($film = null, $user = null)
    {
        echo '<a href="' . base_url('accountConnection') . '">'.
         '<button class="updateButton">'.
         '<p class="nunito updateButtonText">Acheter</p>'.
         '</button>'.
         '</a>';

    }
}

