<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'));

    Route::resource('/berita', BeritaController::class);
    Route::resource('/galeri', GaleriController::class);
});
