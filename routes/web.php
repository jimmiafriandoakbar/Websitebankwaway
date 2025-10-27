<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/


Route::get('/run', function () {
    Alert::success('Success Title', 'Success Message');
})->name('');

Route::get('/', 'GuestController@index');
// Route::get('/', function () {
//     return view('templates.perbaikan');
// });

Route::get('/deposito', function () {
    return view('guest/content/deposito');
});

Route::post('/saran', 'GuestController@kritikPost')->name('kritik');

// route pembukaan rekening
Route::get('/pembukaanRekening', 'GuestController@pembukaanRekening')->name('pembukaanRekening');
Route::post('/pembukaanRekening', 'GuestController@pembukaanRekeningPost')->name('pembukaanRekeningPost');

// route kredit
Route::get('/kredit', function () {
    return view('guest/content/kredit');
});
Route::get('/kredit-umkm', function () {
    return view('guest/content/kredit-umkm');
});
Route::get('/kredit-pegawai', function () {
    return view('guest/content/kredit-pegawai');
});

// route warning
Route::get('/warning', function () {
    return view('guest/content/warning');
});

// route tabungan
Route::get('/tabungan', function () {
    return view('guest/content/tabungan');
});

// route profile
Route::get('/profile', function () {
    return view('guest/content/profile');
});

// route profile
Route::get('/simulasi', function () {
    return view('guest/content/simulasi');
});

// informasi
Route::get('/informasi', 'GuestController@informasi')->name('informasi');

// laporan
Route::get('/laporan', 'GuestController@laporan');

// laporan-gcg
Route::get('/laporan-gcg', 'GuestController@laporanGcg');
// Route::get('/laporan-gcg', function(){
//     return "DALAM PERBAIKAN";
// });

// laporan-keberlanjutan
Route::get('/laporan-keberlanjutan', 'GuestController@laporankeberlanjutan');

// laporan-tahunan
Route::get('/laporan-tahunan', 'GuestController@laporantahunan');

// laporan-pelayanan-kons

Route::get('/laporan-pelayanan-kons', 'GuestController@laporanPelayananKons');

// bantuan
Route::get('/bantuan', function () {
    return view('guest/content/bantuan');
});

// karier
Route::get('/karir', 'GuestController@karir')->name('karir');

// perbaikan
Route::get('/perbaikan', function () {
    return view('templates.perbaikan');
})->name('perbaikan');

Route::get('/formdeposit', function () {
    return view('guest.content.formdeposit');
})->name('formdeposit');

Route::post('/formdepositSubmit', 'GuestController@formdeposit')->name('formdepositSubmit');


Route::get('/formKredit', 'Admin\\FormKreditController@index')->name('formKredit');
Route::post('/formKreditPost', 'Admin\\FormKreditController@formKreditPost')->name('formKreditPost');

// formKreditPegawai
Route::get('/formKreditPegawai', 'FormKreditPegawaiController@index')->name('formKreditPegawai');
Route::post('/formKreditPegawaiPost', 'FormKreditPegawaiController@formKreditPegawaiPost')->name('formKreditPegawaiPost');

Route::get('/dataPengajuanKredit', 'FormKreditPegawaiController@dataPengajuanKredit')->name('dataPengajuanKredit');

// Kredit Pegawai
Route::get('kreditPegawai/step-one-pemohon', 'KreditPegawaiController@stepOnePemohon')->name('stepOnePemohon');
Route::post('kreditPegawai/step-one-pemohonPost', 'KreditPegawaiController@stepOnePemohonPost')->name('stepOnePemohonPost');

Route::get('kreditPegawai/step-two-pengajuan-kredit', 'KreditPegawaiController@stepTwoPengajuanKredit')->name('step-two-pengajuan-kredit');
Route::post('kreditPegawai/step-two-pengajuan-kreditPost', 'KreditPegawaiController@stepTwoPengajuanKreditPost')->name('stepTwoPengajuanKreditPost');

Route::get('kreditPegawai/agunan', 'KreditPegawaiController@agunan')->name('agunan');
Route::post('kreditPegawai/agunanPost', 'KreditPegawaiController@agunanPost')->name('agunanPost');

Route::get('kreditPegawai/uploadKtp', 'KreditPegawaiController@uploadKtp')->name('uploadKtp');
Route::post('kreditPegawai/uploadKtpPost', 'KreditPegawaiController@uploadKtpPost')->name('uploadKtpPost');

// WBS
Route::get('/wbs2', 'WbsController@index')->name('wbs2');
Route::post('/wbsPost2', 'WbsController@wbsPost')->name('wbsPost');

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider zz
*/
Auth::routes(['verify' => true]);

Route::get('/home', function () {
    return view('guest/content/verifiedLogin');
})->name('home')->middleware('verified');
