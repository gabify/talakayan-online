<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Account;
use App\Controllers\Dashboard;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// account routes
$routes->get('login', [Account::class, 'login']);

$routes->match(['get', 'post'], 'account/new', 'Account::new');
$routes->get('dashboard', [Dashboard::class, 'index']);