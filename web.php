<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\DashboardController; // <<< TAMBAHKAN INI

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rute untuk halaman pendaftaran
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'store']);

// Rute untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk OTP
Route::get('/otp/request', [OtpController::class, 'showRequestForm'])->name('otp.request.form');
Route::post('/otp/send', [OtpController::class, 'sendOtp'])->name('otp.send');
Route::get('/otp/verify', [OtpController::class, 'showVerifyForm'])->name('otp.verify.form');
Route::post('/otp/verify', [OtpController::class, 'verifyOtp'])->name('otp.verify');

// <<< TAMBAHKAN RUTE UNTUK DASHBOARD DI SINI
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Opsional: Anda bisa mengelompokkan rute yang memerlukan autentikasi
/*
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Rute lain yang hanya bisa diakses setelah login
});
*/