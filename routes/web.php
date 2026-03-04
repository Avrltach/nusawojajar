<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController; 
use App\Http\Controllers\BanomController; 
use App\Http\Controllers\KegiatanController; 
use App\Http\Controllers\BeritaController; 
use App\Http\Controllers\GaleriController; 


Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::prefix('profil')->name('profil.')->group(function () {    
    Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/laporan-keuangan', [ProfilController::class, 'laporanKeuangan'])->name('laporan-keuangan');
});

Route::prefix('banom')->name('banom.')->group(function () {    
    Route::get('/muslimat', [BanomController::class, 'muslimat'])->name('muslimat');
    Route::get('/fatayat', [BanomController::class, 'fatayat'])->name('fatayat');
    Route::get('/gp-ansor', [BanomController::class, 'gpAnsor'])->name('gp-ansor');
    Route::get('/ipnu', [BanomController::class, 'ipnu'])->name('ipnu');
    Route::get('/ippnu', [BanomController::class, 'ippnu'])->name('ippnu');
    Route::get('/pagar-nusa', [BanomController::class, 'pagarNusa'])->name('pagar-nusa');
});

Route::get('/kegiatan', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'detail'])
    ->name('berita.detail');

Route::prefix('galeri')->name('galeri.')->group(function () {    
    Route::get('/foto', [GaleriController::class, 'foto'])->name('foto');
    Route::get('/video', [GaleriController::class, 'video'])->name('video');
});