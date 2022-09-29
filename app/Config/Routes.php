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
//halaman
$routes->get('/', 'Halaman::index');
$routes->get('/kontak', 'Halaman::kontak');
//berita atau artikel
$routes->get('/berita', 'Berita::berita');
$routes->get('/berita/(:any)', 'Berita::detail/$1');
//laporan
$routes->get('/laporan', 'Laporan::index');
$routes->get('/laporan/download/(:any)', 'Laporan::download/$1');
//profil
$routes->get('/profil/struktur', 'Profil::struktur');
$routes->get('/profil/pengurus', 'Profil::pengurus');
$routes->get('/profil/visi', 'Profil::visi');
$routes->get('/profil/unit', 'Profil::unit');
$routes->get('/profil/regulasi', 'Profil::regulasi');
//kategori
$routes->get('/kategori', 'Kategori::index');
$routes->get('/kategori/wisata/(:any)', 'Kategori::detailwisata/$1');
$routes->get('/kategori/kuliner/(:any)', 'Kategori::detailkuliner/$1');
$routes->get('/kategori/kesenian/(:any)', 'Kategori::detailkesenian/$1');
$routes->get('/kategori/budaya/(:any)', 'Kategori::detailbudaya/$1');
// $routes->get('/kategori/coek', 'Kategori::coek');

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
