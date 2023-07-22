<?php

namespace Config;

use App\Controllers\AuthController;
use App\Controllers\FormController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */







// by filter AuthCheck, only those with session can access these routes
$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {
   $routes->get('/dashboard', 'DashboardController::index');
   $routes->get('delete/(:num)', 'DashboardController::delete/$1');
   $routes->get('signout', 'AuthController::logout');

   // Form CRUD routes
   $routes->get('view', [FormController::class, 'view']);
   $routes->match(['get', 'post'], 'create', [FormController::class, 'create']);
   $routes->match(['get', 'post'], 'update/(:segment)', [FormController::class, 'update']);
   $routes->match(['get', 'post'], 'view/(:segment)', [FormController::class, 'view']);

});

// by filter AlreadyLoggedIn, only those without session can access these routes
$routes->group('', ['filter' => 'AlreadyLoggedIn'], function ($routes) {

   $routes->get('/', 'AuthController::signin');
   $routes->get('signin', 'AuthController::signin');
   $routes->get('signup', 'AuthController::signup');
   $routes->get('forgotpassword', 'AuthController::forgotpassword');
   $routes->get('reset_password/(:any)', 'AuthController::resetpassword/$1');


   $routes->post('signin/check', 'AuthController::check');
   $routes->post('signup/save', 'AuthController::save');
   $routes->post('forgotpassword/check', 'AuthController::forgotpasswordCheck');
   $routes->post('update_password/(:any)', 'AuthController::update/$1');
});

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
   require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
