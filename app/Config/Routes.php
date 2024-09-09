<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  ruta para mostrar la pagina inicial dependiendo si esta autenticado o no
$routes->get('/', 'Home::index');


// ------- RUTAS AUTENTICACION ---------------------------------
// ruta para realizar el login
$routes->post('login', 'Users::login');

// ruta para realizar el registro del usuario
$routes->post('register', 'Users::register');


// ------ RUTAS ADMININISTRADOR --------------------------------
//  ruta para mostrar la pagina inicial dependiendo si esta autenticado o no
$routes->get('admin', 'Admin::index');
