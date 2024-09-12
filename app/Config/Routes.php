<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin', 'Admin::index');
$routes->get('stores', 'Stores::index');
$routes->get('brands', 'Brands::index');
$routes->get('states', 'States::index');
