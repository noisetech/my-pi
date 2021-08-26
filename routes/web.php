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
   return redirect()->route('login');
});


Route::prefix('admin')->namespace('Admin')
->middleware('auth', 'admin')
->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard-admin');

    // admin-mahasiswa
    Route::get('/mahasiswa/index', 'MahasiswaController@index')->name('admin.mahasiswa.index');
    Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('admin.mahasiswa.create');
    Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('admin.mahasiswa.store');
    Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit')->name('admin.mahasiswa.edit');
    Route::put('/mahasiswa/{id}/update', 'MahasiswaController@update')->name('admin.mahasiswa.update');
    Route::get('/mahasiswa/{id}/destroy', 'MahasiswaController@destroy')->name('admin.mahasiswa.destroy');

    // admin-jurusan
    Route::get('/jurusan/index', 'JurusanController@index')->name('admin.jurusan.index');
    Route::get('/jurusan/create', 'JurusanController@create')->name('admin.jurusan.create');
    Route::post('/jurusan/store', 'JurusanController@store')->name('admin.jurusan.store');
    Route::get('/jurusan/{id}/edit', 'JurusanController@edit')->name('admin.jurusan.edit');
    Route::put('/jurusan/{id}/update', 'JurusanController@update')->name('admin.jurusan.update');
    Route::get('/jurusan/{id}/destroy', 'JurusanController@destroy')->name('admin.jurusan.destroy');

    // admin mata-kuliah
    Route::get('/matakuliah/index', 'MataKuliahController@index')->name('admin.matakuliah.index');
    Route::get('/matakuliah/create', 'MataKuliahController@create')->name('admin.matakuliah.create');
    Route::post('/matakuliah/store', 'MataKuliahController@store')->name('admin.matakuliah.store');
    Route::get('/matakuliah/{id}/edit', 'MataKuliahController@edit')->name('admin.matakuliah.edit');
    Route::put('/matakuliah/{id}/update', 'MataKuliahController@update')->name('admin.matakuliah.update');
    Route::get('/matakuliah/{id}/destroy', 'MataKuliahController@destroy')->name('admin.matakuliah.destroy');


    // admin-dosen
    Route::get('/dosen/index', 'DosenController@index')->name('admin.dosen.index');
    Route::get('/dosen/create', 'DosenController@create')->name('admin.dosen.create');
    Route::post('/dosen/store', 'DosenController@store')->name('admin.dosen.store');
    Route::get('/dosen/{id}/edit', 'DosenController@edit')->name('admin.dosen.edit');
    Route::put('/dosen/{id}/update', 'DosenController@update')->name('admin.dosen.update');
    Route::get('/dosen/{id}/destroy', 'DosenController@destroy')->name('admin.dosen.destroy');

    // admin-hari
    Route::get('/hari/index', 'HariController@index')->name('admin.hari.index');
    Route::get('/hari/create', 'HariController@create')->name('admin.hari.create');
    Route::post('/hari/store', 'HariController@store')->name('admin.hari.store');
    Route::get('/hari/{id}/edit', 'HariController@edit')->name('admin.hari.edit');
    Route::put('/hari/{id}/update', 'HariController@update')->name('admin.hari.update');
    Route::get('/hari/{id}/destroy', 'HariController@destroy')->name('admin.hari.destroy');

    // admin-tahun
    Route::get('/tahun/index', 'TahunController@index')->name('admin.tahun.index');
    Route::get('/tahun/create', 'TahunController@create')->name('admin.tahun.create');
    Route::post('/tahun/store', 'TahunController@store')->name('admin.tahun.store');
    Route::get('/tahun/{id}/edit', 'TahunController@edit')->name('admin.tahun.edit');
    Route::put('/tahun/{id}/update', 'TahunController@update')->name('admin.tahun.update');
    Route::get('/tahun/{id}/destroy', 'TahunController@destroy')->name('admin.tahun.destroy');

     // admin-manage-user
     Route::get('/manage-user/index', 'ManageUserController@index')->name('admin.manage-user.index');
     Route::get('/manage-user/create', 'ManageUserController@create')->name('admin.manage-user.create');
     Route::post('/manage-user/store', 'ManageUserController@store')->name('admin.manage-user.store');
     Route::get('/manage-user/{id}/edit', 'ManageUserController@edit')->name('admin.manage-user.edit');
     Route::put('/manage-user/{id}/update', 'ManageUserController@update')->name('admin.manage-user.update');
     Route::get('/manage-user/{id}/destroy', 'ManageUserController@destroy')->name('admin.manage-user.destroy');


});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
