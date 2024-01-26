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
$routes->post('/painel/produtos/edit_submit/(:alphanum)', 'Product::edit_submit/$1');

$routes->get('/painel/produtos/delete/(:alphanum)', 'Product::delete/$1');
$routes->get('/painel/produtos/delete_confirm/(:alphanum)', 'Product::delete_submit/$1');

$routes->get('/painel/estoque', 'Stocks::index');
$routes->get('/painel/estoque/add/(:alphanum)', 'Stocks::add/$1');
$routes->post('/painel/estoque/add_submit', 'Stocks::add_submit');
$routes->get('/painel/estoque/remove/(:alphanum)', 'Stocks::remove/$1');
$routes->post('/painel/estoque/remove_submit', 'Stocks::remove_submit');
$routes->get('/painel/estoque/movements/(:alphanum)', 'Stocks::movements/$1');
$routes->get('/painel/estoque/movements/(:alphanum)/(:alphanum)', 'Stocks::movements/$1/$2');
$routes->get('/painel/estoque/export_csv/(:alphanum)', 'Stocks::export_csv/$1');

