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

Route::prefix('admin')->group(function () {

    Route::get('foto', 'Admin\fotoController@index')->name('admin.foto');

    Route::get('kategori', 'Admin\KategoriController@index')->name('admin.kategori');

    Route::get('user', 'Admin\UsersController@index')->name('admin.user');
    Route::get('user/tambah', 'Admin\UsersController@tambah')->name('admin.user.tambah');
    Route::post('user/simpan', 'Admin\UsersController@simpan')->name('admin.user.simpan');
    Route::get('user/edit/{id}', 'Admin\UsersController@edit')->name('admin.user.edit');
    Route::post('user/update', 'Admin\UsersController@update')->name('admin.user.update');
    Route::get('user/hapus/{id}', 'Admin\UsersController@hapus')->name('admin.user.hapus');
});
