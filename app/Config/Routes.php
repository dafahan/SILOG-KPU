<?php

use App\Controllers\BarangKeluarController;
use App\Controllers\BarangMasukController;
use App\Controllers\DashboardController;
use App\Controllers\HasilSortirController;
use App\Controllers\InfoKebutuhanController;
use App\Controllers\ProfileController;
use App\Controllers\TotalBarangController;
use App\Controllers\BarangController;
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
$routes->post('/kebutuhan/store', [InfoKebutuhanController::class ,'store']);
$routes->get('/kebutuhan/delete/(:any)', [InfoKebutuhanController::class ,'delete']);



$routes->group("/", ["filter" => "auth"], function($routes){
$routes->get('dashboard', [DashboardController::class ,'dashboard']);
$routes->get('profile', [ProfileController::class ,'profile']);
$routes->get('barang_masuk', [BarangMasukController::class ,'barangMasuk']);
$routes->get('barang_keluar', [BarangKeluarController::class ,'barangKeluar']);
$routes->get('total_barang', [TotalBarangController::class ,'totalBarang']);
$routes->get('hasil_sortir', [HasilSortirController::class ,'hasilSortir']);
$routes->get('info_kebutuhan', [InfoKebutuhanController::class ,'infoKebutuhan']);
$routes->post('barang/store', [BarangController::class ,'store']);
$routes->get('barang/delete/(:any)', [BarangController::class ,'delete']);
});


// ADMINISTRATOR
$routes->group("admin", ["filter" => "auth"], function($routes){
    if (session('level') == 1) {
        $routes->get('dashboard', [DashboardController::class ,'admin']);
        $routes->get('profile', [ProfileController::class ,'admin']);
        $routes->get('info_kebutuhan', [InfoKebutuhanController::class ,'admin']);
        $routes->get('hasil_sortir', [HasilSortirController::class ,'admin']);
        $routes->get('barang_keluar', [BarangKeluarController::class ,'admin']);
        $routes->get('barang_masuk', [BarangMasukController::class ,'admin']);
        $routes->get('total_barang', [TotalBarangController::class ,'admin']);

        
    } else {
        return redirect()->to(base_url(''));
    }
});