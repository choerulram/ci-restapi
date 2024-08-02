<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Pegawai
$routes->get('pegawai', 'PegawaiController::index');
