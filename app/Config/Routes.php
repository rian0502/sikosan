<?php

namespace Config;

use CodeIgniter\I18n\Time;
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

// For user guest, pencari kos, and penyewa kos
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::index');
$routes->get('/pusatBantuan', 'Home::pusatBantuan');
$routes->get('/terms', 'Home::terms');
$routes->get('/detail/(:any)', 'Home::detail/$1');
$routes->get('/detail/(:any)/tulis_komentar', 'Home::detail/$1');
$routes->get('/detail/(:any)/report', 'Home::detail/$1');
// -------------------------------------------


// for customer and owner
$routes->get('/report_komentar/create/(:num)/(:num)/(:num)/(:any)', 'ReportKomentar::create/$1/$2/$3/$4', ['filter' => 'role:customer, owner']);
$routes->post('/report_komentar/save', 'ReportKomentar::save', ['filter' => 'role:customer, owner']);
$routes->get('/report_reply_komentar/create/(:num)/(:num)/(:num)/(:any)', 'ReportReplyKomentar::create/$1/$2/$3/$4', ['filter' => 'role:customer, owner']);
$routes->post('/report_reply_komentar/save', 'ReportReplyKomentar::save', ['filter' => 'role:customer, owner']);

//For owner or user  profile
$routes->get('/profil/edit/', 'Profil::edit/', ['filter' => 'role:admin,owner,customer']);
$routes->post('/profile/update', 'Profil::update', ['filter' => 'role:admin,owner,customer']);
// -------------------------------------------


// For admin
$routes->get('/admin/dashboard_admin', 'AdminController::index', ['filter' => 'role:admin']);
$routes->get('/admin/data_user_banned', 'AdminController::data_user_banned', ['filter' => 'role:admin']);
$routes->get('/admin/data_report_kosan', 'ReportKosanController::index', ['filter' => 'role:admin']);
$routes->get('/admin/detail_kosan/(:num)', 'ReportKosanController::detail_kosan/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/hapus_kosan', 'ReportKosanController::delete', ['filter' => 'role:admin']);
$routes->get('/admin/data_report_komentar', 'ReportKomentar::index', ['filter' => 'role:admin']);
$routes->delete('/admin/report_komentar/delete_laporan', 'ReportKomentar::delete_laporan', ['filter' => 'role:admin']);
$routes->delete('/admin/report_komentar/delete_komentar', 'ReportKomentar::delete_komentar', ['filter' => 'role:admin']);
$routes->post('/report_komen/banned', 'ReportKomentar::banned', ['filter' => 'role:admin']);
$routes->post('/report_komen/pulihkan', 'ReportKomentar::pulihkan', ['filter' => 'role:admin']);
// -----------------------------------------------------------------------------------------------

// For Penyewa Kos
$routes->get('/owner/halaman_pemilik', 'OwnerController::halaman_pemilik', ['filter' => 'role:owner']);
$routes->get('/owner/kosan_anda', 'OwnerController::kosan_anda', ['filter' => 'role:owner']);
$routes->get('/owner/detail_kosan_anda/(:any)', 'OwnerController::detail_kosan_anda/$1', ['filter' => 'role:owner']);
$routes->get('/owner/tambah_kosan', 'KosanController::create', ['filter' => 'role:owner']);
$routes->post('/owner/save_kosan', 'KosanController::save', ['filter' => 'role:owner']);
$routes->post('/owner/update_kosan', 'KosanController::update', ['filter' => 'role:owner']);
$routes->delete('/owner/delete_kosan/(:any)', 'KosanController::delete/$1', ['filter' => 'role:owner']);
$routes->get('/owner/profil', 'OwnerController::profil', ['filter' => 'role:owner']);
$routes->get('/owner/edit_kost/(:any)', 'KosanController::edit/$1', ['filter' => 'role:owner']);
// ----------------------------------------------------------------------------------------------------

// For Customer / Pencari Kos
$routes->get('/customer/profil', 'Profil::index', ['filter' => 'role:customer,admin, owner']);
$routes->get('/wishing_post/(:any)/(:any)', 'WishlistController::check_is_wished/$1/$2', ['filter' => 'role:customer']);
$routes->get('/wish/(:num)/(:num)', 'WishlistController::wish/$1/$2');
$routes->get('/unwish/(:num)/(:num)', 'WishlistController::unwish/$1/$2');
$routes->get('/mywish', 'CustomerController::mywish');
// --------------------------------------------------------------------------------------------------------

// Komentar
$routes->post('/save_komentar', 'KomentarController::save_komentar', ['filter' => 'role:customer, owner']);
$routes->post('/reply_komentar', 'KomentarController::reply_komentar', ['filter' => 'role:customer, owner']);
$routes->post('/delete/komentar', 'KomentarController::hapus_komentar', ['filter' => 'role:customer, owner, admin']);
$routes->post('/delete/reply_komentar', 'KomentarController::hapusReplyKomentar', ['filter' => 'role:customer, owner, admin']);

// Report Kosan
$routes->get('/report_kosan/create/(:num)', 'ReportKosanController::create/$1', ['filter' => 'role:customer']);
$routes->post('/report_kosan/save', 'ReportKosanController::save', ['filter' => 'role:customer']);





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
