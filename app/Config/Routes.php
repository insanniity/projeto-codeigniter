<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Main::index');
$routes->get('/products', 'Main::products');
$routes->get('/where', 'Main::where');

$routes->get('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->post('/login_submit', 'Auth::login_submit');


$routes->get('/painel', 'Dashboard::index');

$routes->get('/painel/usuarios', 'User::index');

