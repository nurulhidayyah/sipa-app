<?php

use App\Http\Controllers\AdminAnggotaController;
use App\Http\Controllers\AdminTanggapanController;
use App\Http\Controllers\AdminVerifikasiController;
use App\Http\Controllers\KartuAnggotaController;
use App\Http\Controllers\KetuaVerifikasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingPasswordController;
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

// -------------------------Login dan Registrasi------------------------------

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// ---------------------------------Admin-------------------------------------

Route::resource('/admin/verifikasi', AdminVerifikasiController::class)->only('index', 'show')->middleware('admin');
Route::post('/admin/tanggapan', [AdminTanggapanController::class, 'store']);

// ---------------------------------Ketua-------------------------------------

Route::resource('/ketua/verifikasi', KetuaVerifikasiController::class)->middleware('ketua');


// --------------------------------Anggota-------------------------------------

Route::get('/anggota/kta/{user}', [KartuAnggotaController::class, 'index']);

// -------------------------------Settings------------------------------------
Route::resource('/setting', SettingController::class)->only('index', 'edit', 'update')->middleware('auth');
Route::resource('/ubah_password', SettingPasswordController::class)->only('index', 'update')->middleware('auth');

Route::resource('/admin/anggota', AdminAnggotaController::class)->middleware('dataAnggota');
