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

$routes->get('/painel/produtos', 'Product::index');
$routes->get('/painel/produtos/create', 'Product::create');
$routes->post('/painel/produtos/create_submit', 'Product::create_submit');

$routes->get('/painel/produtos/edit/(:alphanum)', 'Product::edit/$1');
$routes->post('/painel/produtos/edit_submit', 'Product::edit_submit');

$routes->get('/painel/produtos/delete/(:alphanum)', 'Product::delete/$1');
$routes->get('/painel/produtos/delete_confirm/(:alphanum)', 'Product::delete_submit/$1');

$routes->get('/stocks/produtos/(:alphanum)', 'Stocks::product_stock/$1');
