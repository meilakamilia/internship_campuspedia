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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('input', function () {
    return view('input_siswa');
});

Route::get('data', 'SiswaController@index');
Route::get('cari_siswa', 'SiswaController@cari');
Route::get('edit_siswa{no}', 'SiswaController@edit');
Route::get('hapus/siswa_{no}', 'SiswaController@hapus');

Route::post('siswa/tambah', 'SiswaController@tambah');
Route::post('update_siswa{no}', 'SiswaController@update');

