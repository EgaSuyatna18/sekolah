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

Route::get('/', [LandingPageController::class, 'index']);

route::post('/pendaftaran', [PendaftaranController::class, 'daftar']);

route::get('/dashboard', [DashboardController::class, 'index']);

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

route::get('logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});
