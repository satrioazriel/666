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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa', 'mahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-create', 'mahasiswaController@create')->name('tambah-mahasiswa');
Route::post('simpan-mahasiswa', 'mahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}', 'mahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'mahasiswaController@destroy')->name('hapus.mahasiswa');

Route::get('matkul', 'matkulController@index')->name('matkul');
Route::get('matkul-create', 'matkulController@create')->name('tambah-matkul');
Route::post('simpan-matkul', 'matkulController@store')->name('simpan.matkul');

Route::get('edit-matkul/{id}', 'matkulController@edit')->name('edit.matkul');
Route::post('update-matkul/{id}', 'matkulController@update')->name('update.matkul');
Route::get('hapus-matkul/{id}', 'matkulController@destroy')->name('hapus.matkul');
