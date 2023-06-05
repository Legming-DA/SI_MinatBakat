<?php

use App\Http\Controllers\AturanController;
use App\Http\Controllers\HasilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MinatBakatController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/create', function () {
//     return view('siswa.inputSiswa');
// });

// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/create', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class)->except(['show']);

Route::resource('indikator_mb', IndikatorController::class);

Route::resource('peran', RoleController::class);

Route::resource('pengguna', UserController::class);

Route::resource('jurusan', JurusanController::class)->except(['show']);

Route::resource('minat_bakat', MinatBakatController::class)->except(['show']);

Route::resource('aturan', AturanController::class)->except(['show']);

Route::resource('hasil_indikasi', HasilController::class)->except(['show']);

Route::get('/siswa/cetak', [SiswaController::class, 'downloadPDF'])->name('siswa.cetak');
Route::get('/jurusan/cetak', [JurusanController::class, 'downloadPDF'])->name('jurusan.cetak');
Route::get('/minat_bakat/cetak', [MinatBakatController::class, 'downloadPDF'])->name('minat_bakat.cetak');
Route::get('/aturan/cetak', [AturanController::class, 'downloadPDF'])->name('aturan.cetak');
Route::get('/hasil_indikasi/cetak', [HasilController::class, 'downloadPDF'])->name('hasil_indikasi.cetak');

// Route::get('/jurusan', function () {
//     return view('jurusan.jurusan');
// });

// Route::get('/minatbakat', function () {
//     return view('minat_bakat.minatBakat');
// });

// Route::get('/indikator', function () {
//     return view('indikator.indikator');
// });

// Route::get('/aturan', function () {
//     return view('aturan.aturan');
// });

// Route::get('/hasil', function () {
//     return view('hasil.hasil');
// });

// Route::get('/user', function () {
//     return view('user.pengguna');
// });

// Route::get('/role', function () {
//     return view('role.peran');
// });

// Route::get('/cetak', function () {
//     return view('siswa.cetak');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/beranda', function () {
        return view('beranda');
    });


