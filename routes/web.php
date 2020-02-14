<?php

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

// Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('/', 'admin\dashboardController@index');

Route::get('/masakan', 'admin\masakanController@index');

Route::post('/tambah_masakan', 'admin\masakanController@store')->name('tambah_masakan');

Route::get('/order', 'admin\orderController@index');

Route::get('/transaksi', 'admin\transaksiController@index');

Route::get('/user', 'admin\userController@index');

Route::post('/tambah_user', 'admin\userController@store')->name('tambah_user');