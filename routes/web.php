<?php

use App\Models\InformationList;
use App\Models\NewList;
use App\Models\ReportList;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::group(['middleware' => 'guest'],function() {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', 'AuthController@login');
}); 

Route::group(['middleware' => 'guest','namespace' => 'Reader'], function() {    
    Route::get('', 'HomeController@index')->name('reader.index');
    Route::group(['prefix' => 'berita'], function() {
        Route::get('/baca-barita/{berita:slug}', 'ReaderController@berita_show')->name('berita.read');
        Route::view('/kementrian', 'reader.berita.index', ['berita' => NewList::with('new')->where('category_id',1)->latest()->limit(6)->get()])->name('index.kementrian');
        Route::view('/pemerintahan','reader.berita.index', ['berita' => NewList::with('new')->whereCategoryId(2)->latest()->limit(6)->get()])->name('index.pemerintahan');
        Route::view('/pers','reader.berita.index', ['berita' => NewList::with('new')->whereCategoryId(3)->latest()->limit(6)->get()])->name('index.pers');
        Route::view('/media','reader.berita.index', ['berita' => NewList::with('new')->whereCategoryId(4)->latest()->limit(6)->get()])->name('index.media');
        Route::view('/artikel','reader.berita.index', ['berita' => NewList::with('new')->whereCategoryId(5)->latest()->limit(6)->get()])->name('index.artikel');
    });
    Route::group(['prefix' => 'informasi'],function() {
        Route::get('/baca-informasi/{inf:slug}', 'ReaderController@info_show')->name('info.read');
        Route::view('/berkala', 'reader.informasi.index', ['info' => InformationList::with('info')->whereInformationId(1)->latest()->latest()->limit(6)->get()])->name('index.berkala');
        Route::view('/setiap-saat', 'reader.informasi.index', ['info' => InformationList::with('info')->whereInformationId(2)->latest()->limit(6)->get()])->name('index.setiap-saat');
        Route::view('/serta-merta', 'reader.informasi.index', ['info' => InformationList::with('info')->whereInformationId(3)->latest()->limit(6)->get()])->name('index.serta-merta');
    });
    Route::group(['prefix' => 'publikasi'],function() {
        Route::get('/baca-laporan/{report:slug}', 'ReaderController@laporan_show')->name('report.read');
        Route::view('/hoaks','reader.publikasi.index', ['reports' => ReportList::with('report')->whereReportId(1)->latest()->limit(6)->get()])->name('index.hoaks');
        Route::view('/keuangan', 'reader.publikasi.index', ['reports' => ReportList::with('report')->whereReportId(2)->latest()->limit(6)->get()])->name('index.keuangan');
        Route::view('/tahunan', 'reader.publikasi.index', ['reports' => ReportList::with('report')->whereReportId(3)->latest()->limit(6)->get()])->name('index.tahunan');
        Route::view('/kinerja', 'reader.publikasi.index', ['reports' => ReportList::whereReportId(4)->latest()->limit(6)->get()])->name('index.kinerja');
        Route::view('/pelayanan-informasi-publik', 'reader.publikasi.index', ['reports' => ReportList::whereReportId(5)->latest()->limit(6)->get()])->name('index.pelayanan');
        Route::view('/hasil-survey-pelayanan-publik', 'reader.publikasi.index', ['reports' => ReportList::whereReportId(6)->latest()->limit(6)->get()])->name('index.hasil');
        Route::get('/download/{report:slug}', 'ReaderController@Reportdownload')->name('report.download');
    });
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'],function() {
    Route::get('', 'HomeController@index')->name('admin.index');
    Route::group(['prefix' => 'berita'],function() {
        Route::get('','BeritaController@store_form')->name('berita.store');
        Route::post('', 'BeritaController@store');
        Route::get('/kementrian', 'BeritaController@index')->name('kementrian.index');
        Route::get('/kementrian/json', 'BeritaController@data');
        Route::get('/pemerintah', 'BeritaController@index')->name('pemerintah.index');
        Route::get('/pemerintah/json', 'BeritaController@data');
        Route::get('/pers', 'BeritaController@index')->name('pers.index');
        Route::get('/pers/json', 'BeritaController@data');
        Route::get('/media', 'BeritaController@index')->name('media.index');
        Route::get('/media/json', 'BeritaController@data');
        Route::get('/artikel', 'BeritaController@index')->name('artikel.index');
        Route::get('/artikel/json', 'BeritaController@data');
        // Route::get('/galeri-foto', 'BeritaController@index')->name('foto.index');
        // Route::get('/galeri-video', 'BeritaController@index')->name('video.index');
        // Route::get('/KOMINFONEXT', 'BeritaController@index')->name('next.index');
        Route::get('/hapus-berita/{new:title}', 'BeritaController@destroy')->name('berita.destroy');
        Route::get('/edit-berita/{new:slug}', 'BeritaController@edit')->name('berita.update');
        Route::patch('/edit-berita/{new:slug}', 'BeritaController@update');
        Route::get('/detail-berita/{new:slug}', 'BeritaController@show')->name('berita.show');
    });
    Route::group(['prefix' => "laporan"],function() {
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
        Route::get('detail-laporan/{report:slug}', 'LaporanController@show')->name('laporan.show');
    });
    Route::group(['prefix' => 'informasi'],function() {
        Route::Get('/informasi-berkala', 'InformasiController@index')->name('berkala.index');
        Route::get('/informasi-setiap-saat', 'InformasiController@index')->name('setiap_saat.index');
        Route::get('/informasi-setiap-saat/json', 'InformasiController@data');
        Route::get('/informasi-serta-merta', 'InformasiController@index')->name('serta_merta.index');
        Route::get('/informasi-serta-merta/json', 'InformasiController@data');
        Route::get('/tambah-informasi', 'InformasiController@store_form')->name('informasi.store');
        Route::post('/tambah-informasi', 'InformasiController@store');
        Route::get('/hapus-informasi/{inf}', 'InformasiController@destroy')->name('informasi.destroy');
        Route::get('/edit-informasi/{inf:slug}', 'InformasiController@edit')->name('informasi.update');
        Route::patch('/edit-informasi/{inf:slug}', 'InformasiController@update');
        Route::get('/detail-informasi/{inf:slug}', 'InformasiController@show')->name('informasi.show');
        Route::get('/{inf:sub_information}', 'InformasiController@bSelect')->name('berkala.select');
    });
});
Route::group(['namespace' => "Admin"],function() {
    Route::get('/download-laporan.{report:slug}', 'LaporanController@download')->name('laporan.download');
    Route::get('/download-informasi/{inf:slug}', 'InformasiController@download')->name('informasi.download');
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('reader.index');
})->middleware('auth')->name('logout');
