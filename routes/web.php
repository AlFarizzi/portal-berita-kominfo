<?php

use App\Http\Controllers\admin\LaporanController;
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
        // Route::get('/galeri-foto', 'BeritaController@index')->name('foto.index');
        // Route::get('/galeri-video', 'BeritaController@index')->name('video.index');
        // Route::get('/KOMINFONEXT', 'BeritaController@index')->name('next.index');
        Route::delete('/hapus-berita/{new:title}', 'BeritaController@destroy')->name('berita.destroy');
        Route::Get('/edit-berita/{new:slug}', 'BeritaController@edit')->name('berita.update');
        Route::patch('/edit-berita/{new:slug}', 'BeritaController@update');
        Route::get('/detail-berita/{new:slug}', 'BeritaController@show')->name('berita.show');
    });
    Route::group(['prefix' => 'laporan'],function() {
        Route::get('', 'LaporanController@store_form')->name('laporan.store');
        Route::post('', 'LaporanController@store');
        Route::get('/laporan-hoaks', 'LaporanController@index')->name('hoaks.index');
        Route::get('/laporan-keuangan','LaporanController@index')->name('keuangan.index');
        Route::get('/laporan-tahunan', 'LaporanController@index')->name('tahunan.index');
        Route::get('/laporan-kinerja', 'LaporanController@index')->name('kinerja.index');
        Route::get('/laporan-pelayanan-publik', 'LaporanController@index')->name('layanan.index');
        Route::get('/laporan-hasil-survey', 'LaporanController@index')->name('survey.index');
        Route::delete('hapus-laporan/{report:slug}', 'LaporanController@destroy')->name('laporan.destroy');
        Route::get('/edit-laporan/{report:slug}', 'LaporanController@edit')->name('laporan.update');
        Route::patch('/edit-laporan/{report:slug}', 'LaporanController@update');
    });
});
