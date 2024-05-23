<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use App\Models\Siswa;

class PrestasiController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Prestasi';
        $prestasis = Prestasi::with('siswa')->paginate(10);
        $siswas = Siswa::all();
        return view('dashboard.prestasi', compact('title', 'prestasis', 'siswas'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'prestasi' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        Prestasi::create($validated);

        return redirect('/prestasi')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Prestasi $prestasi) {
        $prestasi->delete();
        return redirect('/prestasi')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Prestasi $prestasi) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'prestasi' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        $prestasi->update($validated);
        return redirect('/prestasi')->with('success', 'Berhasil Mengubah Data.');
    }
}
