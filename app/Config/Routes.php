<?php

namespace Config;

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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('pengajuan', 'Pengajuan::index');
// $routes->get('/ajukan', 'Pengajuan::create');
$routes->post('pengajuan/(:segment)', 'Pengajuan::save');
$routes->get('lacak', 'Lacak::index');
$routes->get('lacak/cari', 'Lacak::cari');

// Dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->get('mahasiswa', 'Dashboard::mahasiswa');
$routes->get('orangtua', 'Dashboard::orangtua');
$routes->get('prodi', 'Dashboard::prodi');
$routes->get('fakultas', 'Dashboard::fakultas');
$routes->get('jenis_surat', 'Dashboard::jenis_surat');
$routes->get('surat', 'Dashboard::surat');
$routes->get('pengajuansurat', 'Dashboard::pengajuansurat');

// Penghapusan data 
$routes->get('mahasiswa/delete/(:segment)', 'Mahasiswa::delete/$1');
$routes->get('orangtua/delete/(:segment)', 'OrangTua::delete/$1');
$routes->get('prodi/delete/(:segment)', 'Prodi::delete/$1');
$routes->get('fakultas/delete/(:segment)', 'Fakultas::delete/$1');
$routes->get('jenissurat/delete/(:segment)', 'JenisSurat::delete/$1');
$routes->get('surat/delete/(:segment)', 'Surat::delete/$1');
$routes->get('pengajuansurat/delete/(:segment)', 'PengajuanSurat::delete/$1');

// Edit data
$routes->post('mahasiswa/update/(:segment)', 'Mahasiswa::update/$1');
$routes->post('orangtua/update/(:segment)', 'OrangTua::update/$1');
$routes->post('prodi/update/(:segment)', 'Prodi::update/$1');
$routes->post('fakultas/update/(:segment)', 'Fakultas::update/$1');
$routes->post('jenissurat/update/(:segment)', 'JenisSurat::update/$1');
$routes->post('surat/update/(:segment)', 'Surat::update/$1');
$routes->post('pengajuansurat/update/(:segment)', 'PengajuanSurat::update/$1');

// Tambah data
$routes->post('mahasiswa/save', 'Mahasiswa::save');
$routes->post('orangtua/save/(:segment)', 'OrangTua::save');
$routes->post('prodi/save/(:segment)', 'Prodi::save');
$routes->post('fakultas/save/(:segment)', 'Fakultas::save');
$routes->post('jenissurat/save/(:segment)', 'JenisSurat::save');
$routes->post('surat/save/(:segment)', 'Surat::save');
$routes->post('pengajuansurat/save/(:segment)', 'PengajuanSurat::save');
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