<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('login',[LoginController::class,'index'])->name('login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});
//Route::resource('/login', \App\Http\Controllers\LoginController::class);


Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:1']],function(){
    Route::resource('satuan', SatuanController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::resource('pembelian', PembelianController::class);
    Route::resource('laporan', LaporanController::class);
});


    Route::group(['middleware'=>['cekUserLogin:2']],function(){
        Route::resource('penjualan', PenjualanController::class);
});
    Route::group(['middleware'=>['cekUserLogin:3']],function(){
        Route::resource('pembelian', PembelianController::class);
});
    Route::group(['middleware'=>['cekUserLogin:4']],function(){
        Route::resource('laporan', LaporanController::class);
});
});