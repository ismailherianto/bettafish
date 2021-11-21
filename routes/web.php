<?php

use Illuminate\Support\Facades\Route;

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
//     return view('admins.home');
// });

Route::get('/web', 'Web@index')->name('website');
Route::get('/web/barang-toko', 'Web@barang_toko')->name('toko');
Route::get('/web/barang-lelang', 'Web@barang_lelang')->name('lelang');
Route::get('/web/info-toko', 'Web@info_toko')->name('info-toko');
Route::get('/web/info-lelang', 'Web@info_lelang')->name('info-lelang');
Route::get('/web/single-toko', 'Web@single_toko')->name('single-toko');
Route::get('/web/single-lelang', 'Web@single_lelang')->name('single-lelang');

Route::get('web/login-regist','Web@login_regist')->name('login-regist');

// Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
//Lelang
Route::get('/admin/barang-lelang', 'BarangLelang@index')->name('master_brg_lelang');
Route::get('/admin/list_barang_lelang', 'BarangLelang@listData')->name('list_brg_lelang');
Route::resource('brg_lelang','BarangLelang');
//Toko
Route::get('/admin/barang-toko', 'BarangToko@index')->name('master_brg_toko');
Route::get('/admin/list_barang_toko', 'BarangToko@listData')->name('list_brg_toko');
Route::resource('brg_toko','BarangToko');
// Info
/* Lelang */
Route::get('/admin/info_lelang','InfoLelang@index')->name('master_info_lelang');
Route::get('/admin/list_info_lelang','InfoLelang@listData')->name('list_info_lelang');
Route::resource('info_lelang','InfoLelang');

/* Toko */
Route::get('/admin/info_toko','InfoToko@index')->name('master_info_toko');
Route::get('/admin/list_info_toko','InfoToko@listData')->name('list_info_toko');
Route::resource('info_toko','InfoToko');