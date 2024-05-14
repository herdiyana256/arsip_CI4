<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// app/Config/Routes.php

$routes->get('/', 'HomeController::index');
$routes->get('/auth/login', 'AuthController::login');
$routes->post('/auth/authenticate', 'AuthController::authenticate');
$routes->get('/auth/logout', 'AuthController::logout');

$routes->get('/dokumen', 'DokumenController::index');
$routes->get('/dokumen/tambah', 'DokumenController::tambah');
$routes->post('/dokumen/save', 'DokumenController::save');
$routes->get('/dokumen/detail/(:num)', 'DokumenController::detail/$1');

$routes->get('/user', 'UserController::index');
$routes->get('/user/tambah', 'UserController::tambah');
$routes->post('/user/save', 'UserController::save');

