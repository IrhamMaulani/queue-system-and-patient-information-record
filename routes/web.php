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
Route::get('admin/antrian/pendaftaran/{id}', 'AntrianPasienController@show');
Route::get('admin/antrian/print','AntrianPasienController@print');
Route::post('admin/antrian/pendaftaran/post', 'AntrianPasienController@store');


/* menambah data pasien di halaman antrian */

Route::post('admin/pasien', 'PasienController@store');

/* halaman pasien */

Route::get('admin/pasien', function () {
    return view('admin/daftar_pasien');
});

Route::delete('admin/pasien/{id}', 'PasienController@destroy');

Route::get('admin/pasien/datatable', 'PasienController@index');
Route::put('admin/pasien/detailpasien={id}','PasienController@update');
Route::get('admin/pasien/detailpasien={id}','PasienController@show');

/* Route::get('admin/pasien/print', function () {
    return view('admin/print_kartu');
}); */

Route::get('admin/pasien/print/{id}', 'AntrianPasienController@print');

