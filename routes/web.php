<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TentangAplikasiController;

route::get('/', [HomeController::class, 'index']);
route::get('/profile', [HomeController::class, 'profile']);
route::get('/contact', [HomeController::class, 'contact']);
route::get('/faq', [HomeController::class, 'faq']);
// route::get('/produk', [ProdukController::class, 'index']);
// route::post('/produk', [ProdukController::class, 'update']);
route::get('/info', [TentangAplikasiController::class, 'index']);
route::resource('produk', ProdukController::class);
route::resource('jenis', JenisController::class);
route::resource('user', UserController::class);
route::resource('menu', MenuController::class);
route::get('export/jenis', [JenisController::class, 'exportData'])->name('export-jenis');
route::post('jenis/import', [JenisController::class, 'importData'])->name('import-jenis');
// route::resource('pelanggan', PelangganController::class);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/cek', [LoginController::class, 'cekLogin'])->name('cekLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/tentang-aplikasi', 'TentangAplikasiController@index')->name('tentang-aplikasi');
