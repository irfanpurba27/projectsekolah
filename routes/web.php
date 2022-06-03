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




Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('role:user')->get('/', [App\Http\Controllers\SiswaController::class, 'index'])->name('home');
Route::middleware('role:user')->get('/home', [App\Http\Controllers\SiswaController::class, 'index'])->name('home');
Route::get('/tes', [App\Http\Controllers\SiswaController::class, 'test']);
Route::post('/tes/balik', [App\Http\Controllers\SiswaController::class, 'test']);



Route::middleware('role:user')->post('home/create', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::middleware('role:user')->post('/home/edit', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');

Route::middleware('role:user')->post('ayah/create', [App\Http\Controllers\AyahController::class, 'store'])->name('ayah.store');
Route::middleware('role:user')->post('ayah/edit', [App\Http\Controllers\AyahController::class, 'update'])->name('ayah.update');

Route::middleware('role:user')->post('ibu/create', [App\Http\Controllers\IbuController::class, 'store'])->name('ibu.store');
Route::middleware('role:user')->post('ibu/edit', [App\Http\Controllers\IbuController::class, 'update'])->name('ibu.update');

Route::middleware('role:user')->post('foto/create', [App\Http\Controllers\FotoController::class, 'store'])->name('foto.store');
Route::middleware('role:user')->post('foto/edit', [App\Http\Controllers\FotoController::class, 'update'])->name('foto.update');

Route::middleware('role:user')->post('akta/create', [App\Http\Controllers\AktaController::class, 'store'])->name('akta.store');
Route::middleware('role:user')->post('/akta/edit', [App\Http\Controllers\AktaController::class, 'update'])->name('akta.update');

Route::middleware('role:user')->post('kk/create', [App\Http\Controllers\KkController::class, 'store'])->name('kk.store');
Route::middleware('role:user')->post('kk/edit', [App\Http\Controllers\KkController::class, 'update'])->name('kk.update');



Route::middleware('role:admin')->get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::middleware('role:admin2')->get('/sekolah', [App\Http\Controllers\AdminController::class, 'index2'])->name('admin');
Route::middleware('role:admin2')->get('/grafik', [App\Http\Controllers\AdminController::class, 'index3'])->name('admin');
Route::middleware('role:admin')->get('/permasalahan', [App\Http\Controllers\PermasalahanController::class, 'index'])->name('admin');
Route::middleware('role:admin')->get('/permasalahan-siswa', [App\Http\Controllers\PermasalahanController::class, 'index2'])->name('admin');
Route::middleware('role:admin')->post('/permasalahan-siswa/create', [App\Http\Controllers\PermasalahanController::class, 'store'])->name('permsalahan.create');
Route::middleware('role:admin')->delete('/permasalahan/{permasalahan}/delete', [App\Http\Controllers\PermasalahanController::class, 'destroy'])->name('permasalahan.destroy');
Route::middleware('role:admin')->get('/permasalahan-siswa/{masalah}/edit', [App\Http\Controllers\PermasalahanController::class, 'edit'])->name('permasalahan.edit');
Route::middleware('role:admin')->patch('/permasalahan-siswa/{masalah}/edit', [App\Http\Controllers\PermasalahanController::class, 'update'])->name('permasalahan.update');

Route::middleware('role:admin')->get('/siswa/{siswa}/lihat', [App\Http\Controllers\adminController::class, 'lihat'])->name('siswa.lihat');
Route::middleware('role:admin')->post('/siswa/{siswa}/create', [App\Http\Controllers\PermasalahanController::class, 'store'])->name('siswa.create');
Route::middleware('role:admin')->post('/siswa/{permasalahan}/edit', [App\Http\Controllers\PermasalahanController::class, 'update'])->name('siswa.create');
Route::middleware('role:admin')->get('/siswa/{siswa}/file', [App\Http\Controllers\adminController::class, 'file'])->name('siswa.file');

Route::middleware('role:admin')->post('/siswa/{siswa}/catatan', [App\Http\Controllers\CatatanController::class, 'store'])->name('catatan.create');
Route::middleware('role:admin')->post('/siswa/{catatan}/edit-catatan', [App\Http\Controllers\CatatanController::class, 'update'])->name('catatan.create');
Route::middleware('role:admin')->delete('/siswa/{catatan}/delete-catatan', [App\Http\Controllers\CatatanController::class, 'destroy'])->name('catatan.destroy');

Route::middleware('role:admin')->get('/siswa/{siswa}', [App\Http\Controllers\PermasalahanController::class, 'bina'])->name('permasalahan.bina');
Route::middleware('role:admin')->post('/siswa/{siswa}/create-pembinaan', [App\Http\Controllers\PembinaanController::class, 'store'])->name('bina.create');

Route::middleware('role:admin')->get('/siswa/{permasalahan}/pembinaan', [App\Http\Controllers\PermasalahanController::class, 'bina'])->name('siswa.bina');



Route::middleware('role:admin2')->get('/siswa/{siswa}/sekolah', [App\Http\Controllers\adminController::class, 'sekolah'])->name('siswa.sekolah');
Route::middleware('role:admin2')->post('/siswa/{siswa}/create-permasalahan-disekolah', [App\Http\Controllers\PermasalahanSekolahController::class, 'store'])->name('permasalahansekolah.create');
Route::middleware('role:admin2')->post('/siswa/{permasalahansekolah}/edit-permasalahan', [App\Http\Controllers\PermasalahanSekolahController::class, 'update'])->name('permasalahansekolah.edit');
Route::middleware('role:admin')->delete('/permasalahan/{permasalahansekolah}/delete-permasalahan', [App\Http\Controllers\PermasalahanSekolahController::class, 'destroy'])->name('permasalahansekolah.destroy');

Route::middleware('role:admin2')->post('/siswa/{siswa}/create-pembinaan-sekolah', [App\Http\Controllers\PembinaanSekolahController::class, 'store'])->name('binasekolah.create');
Route::middleware('role:admin2')->get('/siswa/{permasalahan}/pembinaan-sekolah', [App\Http\Controllers\PermasalahanSekolahController::class, 'bina'])->name('siswa.binasekolah');

Route::middleware('role:admin2')->post('/siswa/{siswa}/catatan-sekolah', [App\Http\Controllers\CatatansekolahController::class, 'store'])->name('catatansekolah.create');
Route::middleware('role:admin2')->post('/siswa/{catatan}/edit-catatan-sekolah', [App\Http\Controllers\CatatansekolahController::class, 'update'])->name('catatansekolah.create');
Route::middleware('role:admin2')->delete('/siswa/{catatan}/delete-catatan-sekolah', [App\Http\Controllers\CatatansekolahController::class, 'destroy'])->name('catatansekolah.destroy');










