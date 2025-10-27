<?php

use Illuminate\Support\Facades\DB;

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/emailNasabah', 'Admin\EmailNasabahController@email')->name('emailNasabah');

Route::get('/dataRekeningBaru', 'Admin\RekeningBaruController@dataRekeningBaru')->name('dataRekeningBaru');
Route::get('/detailDataRekeningBaru/{data}', 'Admin\RekeningBaruController@detailDataRekeningBaru')->name('detailDataRekeningBaru');

// pelayanan konsumen
Route::get('/pelayananKonsumen', 'Admin\PelayananConsumenController@index')->name('pelayananKonsumen');
Route::post('/uploadPelayananKonsumen', 'Admin\PelayananConsumenController@uploadPelayananKonsumen')->name('uploadPelayananKonsumen');
Route::get('/pelayanan/konsumen/{item}', 'Admin\PelayananConsumenController@pelayananKonsumenDelete')->name('pelayananKonsumenDelete');

// publikasi
Route::get('/publikasi', 'Admin\PublikasiController@index')->name('publikasi');
Route::post('/uploadPublikasi', 'Admin\PublikasiController@uploadPublikasi')->name('uploadPublikasi');
Route::get('/publikasiDelete/{item}', 'Admin\PublikasiController@publikasiDelete')->name('publikasiDelete');

// karir
Route::get('/karir', 'Admin\KarirController@index')->name('karir');
Route::post('/uploadKarir', 'Admin\KarirController@uploadKarir')->name('uploadKarir');
Route::get('/karirDelete/{item}', 'Admin\KarirController@karirDelete')->name('karirDelete');

Route::get('/tataKelola', 'Admin\TataKelolaController@index')->name('tataKelola');
Route::post('/uploadTataKelola', 'Admin\TataKelolaController@uploadTataKelola')->name('uploadTataKelola');
Route::get('/tataKelolaDelete/{item}', 'Admin\TataKelolaController@tataKelolaDelete')->name('tataKelolaDelete');

// log
Route::get('/log', function () {
    $log = \App\ActivityLog::all();
    dd($log);
    // return view('admin.log', compact('log'));
})->name('log');

Route::get('/contactUs', function () {
    return view('admin/content/contactUs');
})->name('contactUs');

// route informasi
Route::get('/informasi', 'Admin\InformasiController@index')->name('informasi');
Route::post('/uploadInformasi', 'Admin\InformasiController@uploadInformasi')->name('uploadInformasi');
Route::get('/informasiDelete/{item}', 'Admin\InformasiController@informasiDelete')->name('informasiDelete');

// route cover
Route::get('/cover', 'Admin\CoverController@index')->name('cover');
// route edit cover
Route::get('/cover/edit/{data}', 'Admin\CoverController@edit')->name('coverEdit');
Route::post('/cover/edit/{data}', 'Admin\CoverController@update')->name('coverUpdate');

// route Absensi Uang Makan
Route::get('/absensi-uangmakan', function () {
    return 'oke';
})->name('absensiUangMakan');

Route::get('/cobaData', function () {
    $stmtDataRekenignBaru = DB::table('pendaftaranrekening')->orderBy('id', 'desc')->get();
    return view('admin/content/cobaData', compact('stmtDataRekenignBaru'));
})->name('');

Route::get('/contoh', function () {
    return view('admin/content/contoh');
});

// deposito
Route::get('/deposito', 'Admin\DepositoController@deposito')->name('deposito');

// Kredit Pegawai
Route::get('/kreditPegawai', 'Admin\KreditPegawaiController@index')->name('kreditPegawai');
Route::get('/kreditPegawai/{data}', 'Admin\KreditPegawaiController@exportPdf')->name('exportPdf');

//WBS
Route::get('/wbs', 'Admin\WbsController@index')->name('wbs');
Route::get('/wbsDetail/{e}', 'Admin\WbsController@wbsDetail')->name('wbsDetail');

Route::get('/updateapp', function()
{
    exec('composer dump-autoload');
    echo 'composer dump-autoload complete';
});