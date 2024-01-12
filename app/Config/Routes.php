<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('deconnecter', 'Utilisateur::deconnecter');

$routes->post('inscription', 'Utilisateur::creerutilisateur');
$routes->post('connecter', 'Utilisateur::connecter');
$routes->post('changerNomEtPrenom', 'Utilisateur::changerNomEtPrenom');
$routes->post('changerMail', 'Utilisateur::changerMail');
$routes->post('changerPassword', 'Utilisateur::changerPassword');





use App\Controllers\Pages;
$routes->get('filmFocused/(:num)', [Pages::class, 'filmFocused/$1']);
$routes->get('(:segment)', [Pages::class, 'view']);