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



Auth::routes();
Route::get('/', function () {
    return redirect()->route('login');;
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/antrian', 'AntrianController@index')->name('antrian');
Route::post('admin/antrian', 'AntrianController@store');
Route::get('admin/antrian/pendaftaran', 'AntrianPasienController@index');
Route::post('admin/antrian/pendaftaran', 'AntrianPasienController@store');
Route::get('admin/antrian/pendaftaran/{id}', 'AntrianPasienController@show');
Route::get('admin/antrian/print','AntrianPasienController@print');


/* menambah data pasien di halaman antrian */

Route::post('admin/pasien', 'PasienController@store');

