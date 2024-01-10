<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

use App\Controllers\Pages;
$routes->get('(:segment)', [Pages::class, 'view']);