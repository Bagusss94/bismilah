<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/coba', 'Dashboard::coba');
$routes->get('/components/buttons', 'Components::buttons');
$routes->get('/components/cards', 'Components::cards');
$routes->get('/utilities/colors', 'Utilities::colors');
$routes->get('/utilities/borders', 'Utilities::borders');
$routes->get('/utilities/animations', 'Utilities::animations');
$routes->get('/utilities/others', 'Utilities::others');
$routes->get('/pages/login', 'Pages::login');
$routes->get('/pages/register', 'Pages::register');
$routes->get('/pages/forgot-password', 'Pages::forgot_password');
$routes->get('/pages/404', 'Pages::pages404');
$routes->get('/pages/blank', 'Pages::blank');
$routes->get('/siplah', 'Siplah::order-siplah');
$routes->get('/charts', 'Charts::index');
$routes->get('/tables', 'Tables::index');
