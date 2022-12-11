<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/harga/pulsa_all','Pages::pulsa_all');
$routes->get('/harga/fee_ppob','Pages::fee_ppob');
$routes->get('/harga/isi_saldo','Pages::isi_saldo');
$routes->get('/harga/paket_data','Pages::paket_data');
$routes->get('/harga/paket_telp','Pages::paket_telp');
$routes->get('/harga/token_pln','Pages::token_pln');
$routes->get('/harga/voucher_game','Pages::voucher_game');
$routes->get('/harga/voucher_tv','Pages::voucher_tv');
$routes->get('/daftar/aplikasi','Pages::aplikasi');
$routes->get('/daftar/whatsapp','Pages::whatsapp');
$routes->get('/daftar/sms','Pages::sms');
$routes->get('deposit','Pages::deposit');
$routes->get('/transaksi/trx_android','Pages::trx_android');

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
