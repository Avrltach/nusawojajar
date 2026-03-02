<?php

use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\FotoController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\LaporanKeuanganController;


Route::get('/beritas', [BeritaController::class, 'index']);
Route::get('/beritas/{slug}', [BeritaController::class, 'show']);

Route::get('/fotos', [FotoController::class, 'index']);

Route::get('/videos', [VideoController::class, 'index']);
Route::get('/videos/{id}', [VideoController::class, 'show']);

Route::get('/laporan-keuangan', [LaporanKeuanganController::class, 'index']);
Route::get('/laporan-keuangan/{id}', [LaporanKeuanganController::class, 'show']);