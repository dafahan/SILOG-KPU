<?php

use App\Controllers\BarangKeluarController;
use App\Controllers\BarangMasukController;
use App\Controllers\DashboardController;
use App\Controllers\HasilSortirController;
use App\Controllers\InfoKebutuhanController;
use App\Controllers\ProfileController;
use App\Controllers\TotalBarangController;
use CodeIgniter\Router\RouteCollection;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->match(['get', 'post'],'/logout',function(){
    delete_cookie('remember_token');
    session()->destroy();
    return redirect()->to(base_url('/'));
});
$routes->post('/changepassword',[ProfileController::class ,'changepassword']);
$routes->post('/changephoto',[ProfileController::class ,'changephoto']);
$routes->get('/foto/(:any)',[ProfileController::class ,'download']);


// USER
$routes->get('/dashboard', [DashboardController::class ,'dashboard']);
$routes->get('/profile', [ProfileController::class ,'profile']);
$routes->get('/barang_masuk', [BarangMasukController::class ,'barangMasuk']);
$routes->get('/barang_keluar', [BarangKeluarController::class ,'barangKeluar']);
$routes->get('/total_barang', [TotalBarangController::class ,'totalBarang']);
$routes->get('/hasil_sortir', [HasilSortirController::class ,'hasilSortir']);
$routes->get('/info_kebutuhan', [InfoKebutuhanController::class ,'infoKebutuhan']);

// ADMINISTRATOR