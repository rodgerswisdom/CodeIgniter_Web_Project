<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * 'Home::index' - any incoming unspecified content should be directed to index() method in Home controller
 */

 $routes->get('pages', [Pages::class, 'index']);
 $routes->get('(:segment)', [Pages::class, 'view']);
