<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->post('inscription', 'Inscription::creerutilisateur');
$routes->post('connecter', 'Inscription::connecter');
$routes->get('deconnecter', 'Inscription::deconnecter');
$routes->post('changerNomEtPrenom', 'Inscription::changerNomEtPrenom');
$routes->post('changerMail', 'Inscription::changerMail');




use App\Controllers\Pages;
$routes->get('filmFocused/(:num)', [Pages::class, 'filmFocused/$1']);
$routes->get('(:segment)', [Pages::class, 'view']);