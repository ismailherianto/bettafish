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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/web', 'Web@index')->name('website');
Route::get('/web/barang-toko', 'Web@barang_toko')->name('toko');
Route::get('/web/barang-lelang', 'Web@barang_lelang')->name('lelang');
Route::get('web/login-regist','Web@login_regist')->name('login-regist');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
