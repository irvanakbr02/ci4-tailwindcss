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
//admin
$routes->get('/admin/dashboard', 'Admin::index');
//Laporan Admin
$routes->get('/admin/laporan', 'Admin::laporan');
$routes->get('/admin/laporan/edit/(:segment)', 'AdminLaporan::LaporanEdit/$1');
$routes->delete('/admin/laporan/(:num)', 'AdminLaporan::LaporanDelete/$1');
$routes->get('/admin/laporan/create', 'AdminLaporan::LaporanCreate');
$routes->post('/admin/laporan/save', 'AdminLaporan::LaporanSave');
$routes->post('/admin/laporan/update/(:segment)', 'AdminLaporan::LaporanUpdate/$1');
//Berita Admin
$routes->get('/admin/berita', 'Admin::berita');
$routes->get('/admin/berita/edit/(:segment)', 'AdminBerita::Edit/$1');
$routes->delete('/admin/berita/(:num)', 'AdminBerita::Delete/$1');
$routes->get('/admin/berita/create', 'AdminBerita::Create');
$routes->post('/admin/berita/save', 'AdminBerita::Save');
$routes->post('/admin/berita/update/(:segment)', 'AdminBerita::Update/$1');

//Admin Kategori
//wisata
$routes->get('/admin/kategori/wisata', 'AdminKategori::wisata');
$routes->get('/admin/kategori/wisata/edit/(:segment)', 'AdminKategori::WisataEdit/$1');
$routes->delete('/admin/kategori/wisata/(:num)', 'AdminKategori::WisataDelete/$1');
$routes->get('/admin/kategori/wisata/create', 'AdminKategori::WisataCreate');
$routes->post('/admin/kategori/wisata/save', 'AdminKategori::WisataSave');
$routes->post('/admin/kategori/wisata/update/(:segment)', 'AdminKategori::WisataUpdate/$1');

//Kuliner
$routes->get('/admin/kategori/kuliner', 'AdminKategori::kuliner');
$routes->get('/admin/kategori/kuliner/edit/(:segment)', 'AdminKategori::KulinerEdit/$1');
$routes->delete('/admin/kategori/kuliner/(:num)', 'AdminKategori::KulinerDelete/$1');
$routes->get('/admin/kategori/kuliner/create', 'AdminKategori::KulinerCreate');
$routes->post('/admin/kategori/kuliner/save', 'AdminKategori::KulinerSave');
$routes->post('/admin/kategori/kuliner/update/(:segment)', 'AdminKategori::KulinerUpdate/$1');
//Kesenian
$routes->get('/admin/kategori/kesenian', 'AdminKategori::kesenian');
$routes->get('/admin/kategori/kesenian/edit/(:segment)', 'AdminKategori::KesenianEdit/$1');
$routes->delete('/admin/kategori/kesenian/(:num)', 'AdminKategori::KesenianDelete/$1');
$routes->get('/admin/kategori/kesenian/create', 'AdminKategori::KesenianCreate');
$routes->post('/admin/kategori/kesenian/save', 'AdminKategori::KesenianSave');
$routes->post('/admin/kategori/kesenian/update/(:segment)', 'AdminKategori::KesenianUpdate/$1');
//Budaya
$routes->get('/admin/kategori/budaya', 'AdminKategori::budaya');
$routes->get('/admin/kategori/budaya/edit/(:segment)', 'AdminKategori::BudayaEdit/$1');
$routes->delete('/admin/kategori/budaya/(:num)', 'AdminKategori::BudayaDelete/$1');
$routes->get('/admin/kategori/budaya/create', 'AdminKategori::BudayaCreate');
$routes->post('/admin/kategori/budaya/save', 'AdminKategori::BudayaSave');
$routes->post('/admin/kategori/budaya/update/(:segment)', 'AdminKategori::BudayaUpdate/$1');
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
