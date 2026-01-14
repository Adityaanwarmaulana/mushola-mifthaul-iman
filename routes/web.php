<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\GaleriController as PublicGaleri;
use App\Http\Controllers\Public\BeritaController as PublicBerita;
use App\Http\Controllers\Public\JadwalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController as AdminBerita;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Public\PageController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jadwal-sholat', [JadwalController::class, 'index']);

Route::get('/berita', [PublicBerita::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [PublicBerita::class, 'show'])->name('berita.show');
Route::get('/galeri', [PublicGaleri::class, 'index']);
Route::get('/donasi', [PageController::class, 'donasi']);
Route::get('/kontak', [PageController::class, 'kontak']);

/*
|--------------------------------------------------------------------------
| DASHBOARD (WAJIB UNTUK LARAVEL BREEZE)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])
    ->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTH PROFILE
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/berita', AdminBerita::class);

    Route::resource('/galeri', GaleriController::class)->only(['index', 'create', 'store']);

    Route::get('/setting', [SettingController::class, 'index']);
    Route::post('/setting', [SettingController::class, 'store']);
});


require __DIR__ . '/auth.php';
