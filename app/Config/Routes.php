<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Main::index');
$routes->get('/products', 'Main::products');
$routes->get('/where', 'Main::where');

$routes->get('/login', 'Auth::index');


$routes->get('/painel', 'Dashboard::index');

