<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index', ['filter' => 'authFilter']);
$routes->get('/', 'Home::index');
$routes->get('/termsandconditions', 'Home::termsandconditions');
$routes->get('carlist', 'Home::carlist');
$routes->get('myorder', 'Home::myorder');
$routes->get('carview', 'Home::carview');
// $routes->get('/login', 'Home::login', ['filter' => 'guestFilter']);

// booking Route 
$routes->post('/booking_insert_data', 'BookingController::booking_insert_data');


// login route 

// $routes->setDefaultController('Register');
// $routes->get('/', 'Home::register', ['filter' => 'guestFilter']);
// $routes->get('/register', 'Home::register', ['filter' => 'guestFilter']);
// $routes->post('/register', 'RegisterController::register', ['filter' => 'guestFilter']);
 
// $routes->get('/login', 'LoginController::Home', ['filter' => 'guestFilter']);
// $routes->post('/login', 'LoginController::authenticate', ['filter' => 'guestFilter']);
 
// $routes->get('/logout', 'LoginController::logout', ['filter' => 'authFilter']);
// $routes->get('/', 'Dashboard::Home', ['filter' => 'authFilter']);

