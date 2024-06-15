<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PrestasiController;

Route::get('/', [LandingPageController::class, 'index']);

route::post('/pendaftaran', [PendaftaranController::class, 'daftar']);
route::get('/pendaftaran', [PendaftaranController::class, 'pendaftaran']);

route::get('/dashboard', [DashboardController::class, 'index']);
route::get('/dashboard/{key}/search', [DashboardController::class, 'search']);

route::get('/mata_pelajaran', [MataPelajaranController::class, 'index']);
route::post('/mata_pelajaran/{kelas}', [MataPelajaranController::class, 'setMapel']);

route::get('/pendidik', [PendidikController::class, 'index']);
route::post('/pendidik', [PendidikController::class, 'store']);
route::get('/pendidik/{pendidik}', [PendidikController::class, 'destroy']);
route::put('/pendidik/{pendidik}', [PendidikController::class, 'update']);

route::get('/berita', [BeritaController::class, 'index']);
route::post('/berita', [BeritaController::class, 'store']);
route::get('/berita/{berita}', [BeritaController::class, 'destroy']);
route::put('/berita/{berita}', [BeritaController::class, 'update']);

route::get('/siswa', [SiswaController::class, 'index']);
route::post('/siswa', [SiswaController::class, 'store']);
route::get('/siswa/{siswa}', [SiswaController::class, 'destroy']);
route::put('/siswa/{siswa}', [SiswaController::class, 'update']);

route::get('/kehadiran', [KehadiranController::class, 'index']);
route::post('/kehadiran', [KehadiranController::class, 'store']);
route::get('/kehadiran/{kehadiran}', [KehadiranController::class, 'destroy']);
route::put('/kehadiran/{kehadiran}', [KehadiranController::class, 'update']);

route::get('/nilai', [NilaiController::class, 'index']);
route::post('/nilai', [NilaiController::class, 'store']);
route::get('/nilai/{nilai}', [NilaiController::class, 'destroy']);
route::put('/nilai/{nilai}', [NilaiController::class, 'update']);

route::get('/prestasi', [PrestasiController::class, 'index']);
route::post('/prestasi', [PrestasiController::class, 'store']);
route::get('/prestasi/{prestasi}', [PrestasiController::class, 'destroy']);
route::put('/prestasi/{prestasi}', [PrestasiController::class, 'update']);

route::get('logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});
