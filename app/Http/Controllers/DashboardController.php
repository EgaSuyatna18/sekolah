<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pendidik;
use App\Models\Prestasi;
use App\Models\Berita;
use App\Models\Nilai;
use App\Models\Kehadiran;

class DashboardController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Dashboard';
        $siswa = Siswa::get()->count();
        $pendidik = Pendidik::get()->count();
        $prestasi = Prestasi::get()->count();
        $berita = Berita::get()->count();
        return view('dashboard.index', compact('title', 'siswa', 'pendidik', 'prestasi', 'berita'));
    }

    function search($key) {
        $siswa = Siswa::where('nama', $key)->first();
        if(!$siswa) return redirect('/dashboard')->withErrors(['error' => 'Nama Siswa Tidak Ditemukan!']);

        $kehadirans = Kehadiran::with('siswa')->where('siswa_id', $siswa->id)->paginate(5);
        $nilais = Nilai::with('siswa')->where('siswa_id', $siswa->id)->paginate(5);
        $prestasis = Prestasi::with('siswa')->where('siswa_id', $siswa->id)->paginate(5);

        return redirect('/dashboard')->with(compact('kehadirans', 'nilais', 'prestasis'));
    }
}
