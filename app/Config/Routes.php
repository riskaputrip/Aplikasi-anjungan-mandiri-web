<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/console_box', 'ConsoleBox::index');
$routes->get('/petugas_panggil', 'PetugasPanggil::index');
$routes->get('/display', 'Display::index');
$routes->get('/console_box/peserta_bpjs', 'ConsoleBox::peserta_bpjs');
$routes->get('/console_box/peserta_nonbpjs', 'ConsoleBox::peserta_nonbpjs');
$routes->post('/console_box/form_bpjs', 'ConsoleBox::form_bpjs');
$routes->post('/console_box/form_nonbpjs', 'ConsoleBox::form_nonbpjs');
$routes->get('/console_box/data_diri', 'ConsoleBox::data_diri');
$routes->get('/console_box/data_diri_nonbpjs', 'ConsoleBox::data_diri_nonbpjs');
$routes->get('/console_box/nomor_antrian/(:num)/(:segment)', 'ConsoleBox::nomor_antrian/$1/$2');
$routes->post('/console_box/ambil_antrian', 'ConsoleBox::ambil_antrian');
$routes->post('/console_box/nomor_antrian/data', 'ConsoleBox::nomor_antrian');
$routes->get('/petugas_panggil/antrian_poli_umum', 'PetugasPanggil::antrian_poli_umum');
$routes->post('/petugas_panggil/update', 'PetugasPanggil::update_antrian');
$routes->get('/display/display_poli_umum', 'Display::display_poli_umum');
$routes->get('/petugas_panggil/antrian_poli_gigi_mulut', 'PetugasPanggil::antrian_poli_gigi_mulut');
$routes->get('/display/display_poli_gigi_mulut', 'Display::display_poli_gigi_mulut');
$routes->get('/petugas_panggil/antrian_poli_kia', 'PetugasPanggil::antrian_poli_kia');
$routes->get('/display/display_poli_kia', 'Display::display_poli_kia');
$routes->get('/petugas_panggil/antrian_laboratorium', 'PetugasPanggil::antrian_laboratorium');
$routes->get('/display/display_laboratorium', 'Display::display_laboratorium');
$routes->get('/petugas_panggil/antrian_poli_kb', 'PetugasPanggil::antrian_poli_kb');
$routes->get('/display/display_poli_kb', 'Display::display_poli_kb');
$routes->get('/petugas_panggil/antrian_poli_refraksi', 'PetugasPanggil::antrian_poli_refraksi');
$routes->get('/display/display_poli_refraksi', 'Display::display_poli_refraksi');
$routes->get('/petugas_panggil/antrian_poli_persalinan', 'PetugasPanggil::antrian_poli_persalinan');
$routes->get('/display/display_poli_persalinan', 'Display::display_poli_persalinan');
$routes->get('/console_box/cetak', 'cetak::index');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
