<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('lokasi/create', 'Home::createLokasi');
$routes->post('lokasi/create', 'Home::storeLokasi');
$routes->get('lokasi/edit/(:num)', 'Home::editLokasi/$1');
$routes->post('lokasi/update/(:num)', 'Home::updateLokasi/$1');
$routes->get('lokasi/delete/(:num)', 'Home::deleteLokasi/$1');
$routes->get('proyek/create', 'Home::createProyek');
$routes->post('proyek/create', 'Home::storeProyek');
$routes->get('proyek/edit/(:num)', 'Home::editProyek/$1');
$routes->post('proyek/update/(:num)', 'Home::updateProyek/$1');
$routes->get('proyek/delete/(:num)', 'Home::deleteProyek/$1');



$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
    $routes->resource('proyek', ['controller' => 'ProyekController']);
    $routes->resource('lokasi', ['controller' => 'LokasiController']);
});