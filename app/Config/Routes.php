<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->post('inscription', 'Inscription::sauvegarder');


use App\Controllers\Pages;
$routes->get('(:segment)', [Pages::class, 'view']);