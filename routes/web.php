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
    return view('admin');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],function() {
    Route::get('', 'HomeController@index')->name('admin.index');
    Route::group(['prefix' => 'berita'],function() {
        Route::get('','BeritaController@store_form')->name('berita.store');
        Route::post('', 'BeritaController@store');
        Route::get('/kementrian', 'BeritaController@index')->name('kementrian.index');
        Route::get('/pemerintah', 'BeritaController@index')->name('pemerintah.index');
        Route::get('/siaran-pers', 'BeritaController@index')->name('pers.index');
        Route::get('/sorotan-media', 'BeritaController@index')->name('media.index');
        Route::get('/artikel', 'BeritaController@index')->name('artikel.index');
        Route::get('/galeri-foto', 'BeritaController@index')->name('foto.index');
        Route::get('/galeri-video', 'BeritaController@index')->name('video.index');
        Route::get('/KOMINFONEXT', 'BeritaController@index')->name('next.index');
    });
});
