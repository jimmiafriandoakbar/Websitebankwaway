<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\VerifikasiDownloadController;
use App\Http\Controllers\WbsAdminController;

/*
|--------------------------------------------------------------------------
| BASIC ROUTES
|--------------------------------------------------------------------------
*/

Route::post('/verifikasi-download', [VerifikasiDownloadController::class, 'store'])
     ->name('verifikasi.download');

/*
|--------------------------------------------------------------------------
| APPLICATION ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/run', function () {
    Alert::success('Success Title', 'Success Message');
});

Route::get('/', 'GuestController@index');

Route::get('/deposito', function () {
    return view('guest/content/deposito');
});

Route::post('/saran', 'GuestController@kritikPost')->name('kritik');

// pembukaan rekening
Route::get('/pembukaanRekening', 'GuestController@pembukaanRekening')->name('pembukaanRekening');
Route::post('/pembukaanRekening', 'GuestController@pembukaanRekeningPost')->name('pembukaanRekeningPost');

// kredit
Route::get('/kredit', function () {
    return view('guest/content/kredit');
});
Route::get('/kredit-konsumer', function () {
    return view('guest/content/kredit-konsumer');
});
Route::get('/kredit-komersil', function () {
    return view('guest/content/kredit-komersil');
});

// lainnya
Route::get('/warning', fn() => view('guest/content/warning'));
Route::get('/tabungan', fn() => view('guest/content/tabungan'));
Route::get('/profile', fn() => view('guest/content/profile'));
Route::get('/simulasi', fn() => view('guest/content/simulasi'));
Route::get('/bantuan', fn() => view('guest/content/bantuan'));

Route::get('/informasi', 'GuestController@informasi')->name('informasi');
Route::get('/laporan', 'GuestController@laporan');
Route::get('/laporan-gcg', 'GuestController@laporanGcg');
Route::get('/laporan-keberlanjutan', 'GuestController@laporankeberlanjutan');
Route::get('/laporan-tahunan', 'GuestController@laporantahunan');
Route::get('/laporan-pelayanan-kons', 'GuestController@laporanPelayananKons');

Route::get('/karir', 'GuestController@karir')->name('karir');

Route::get('/perbaikan', function () {
    return view('templates.perbaikan');
})->name('perbaikan');

// form
Route::get('/formdeposit', fn() => view('guest.content.formdeposit'))->name('formdeposit');
Route::post('/formdepositSubmit', 'GuestController@formdeposit')->name('formdepositSubmit');

Route::get('/formKredit', 'Admin\\FormKreditController@index')->name('formKredit');
Route::post('/formKreditPost', 'Admin\\FormKreditController@formKreditPost')->name('formKreditPost');

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

// WBS publik
Route::get('/wbs2', 'WbsController@index')->name('wbs2');
Route::post('/wbsPost2', 'WbsController@wbsPost')->name('wbsPost');

/*
|--------------------------------------------------------------------------
| AUTH (TANPA VERIFIKASI)
|--------------------------------------------------------------------------
*/
Auth::routes(); // ✅ sudah tanpa verify

/*
|--------------------------------------------------------------------------
| SETELAH LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/home', function () {
    return view('guest/content/verifiedLogin');
})->name('home');

Route::get('/logout-test', function () {
    auth()->logout();
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| ADMIN WBS
|--------------------------------------------------------------------------
*/
Route::get('/admin-wbs', function () {
    return view('admin-wbs.index-wbs');
})->middleware('auth');

Route::get('/admin-wbs', [WbsAdminController::class, 'index'])
    ->middleware('auth');

Route::get('/admin-wbs', [WbsAdminController::class, 'index'])->middleware('auth');
Route::get('/admin-wbs/{id}', [WbsAdminController::class, 'show'])->name('admin.wbsDetail');