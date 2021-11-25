<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('website');
});

Auth::routes();
Route::group(['middleware'=>['web','cekuser:0','cekstatus:1']],function(){
    Route::get('/web', 'Web@index')->name('website');
    Route::get('/web/barang-toko', 'Web@barang_toko')->name('toko');
    Route::get('/web/barang-lelang', 'Web@barang_lelang')->name('lelang');
    Route::get('/web/info-toko', 'Web@info_toko')->name('info-toko');
    Route::get('/web/info-lelang', 'Web@info_lelang')->name('info-lelang');
    Route::get('/web/single-toko/{id}', 'Web@single_toko')->name('single-toko');
    Route::get('/web/single-lelang/{id}', 'Web@single_lelang')->name('single-lelang');

    //progres
});


Route::group(['middleware'=>['web','cekuser:1','cekstatus:1']],function(){
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::post('register','User@store')->name('register_user');
    Route::get('/admin/user', 'User@index')->name('master_user');
    Route::resource('user','User');
    //Lelang
    Route::get('/admin/barang-lelang', 'BarangLelang@index')->name('master_brg_lelang');
    Route::resource('brg_lelang','BarangLelang');
    //Toko
    Route::get('/admin/barang-toko', 'BarangToko@index')->name('master_brg_toko');
    Route::resource('brg_toko','BarangToko');
    // Info
    /* Lelang */
    Route::get('/admin/info_lelang','InfoLelang@index')->name('master_info_lelang');
    Route::resource('info_lelang','InfoLelang');
    
    /* Toko */
    Route::get('/admin/info_toko','InfoToko@index')->name('master_info_toko');
    Route::resource('info_toko','InfoToko');
});
// Route::get('web/login-regist','Web@login_regist')->name('login-regist');


