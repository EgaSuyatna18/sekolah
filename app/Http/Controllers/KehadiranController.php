<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Models\Siswa;

class KehadiranController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Kehadiran';
        $kehadirans = Kehadiran::with('siswa')->paginate(10);
        $siswas = Siswa::all();
        return view('dashboard.kehadiran', compact('title', 'kehadirans', 'siswas'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
            'keterangan' => 'required',
        ]);

        Kehadiran::create($validated);

        return redirect('/kehadiran')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Kehadiran $kehadiran) {
        $kehadiran->delete();
        return redirect('/kehadiran')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Kehadiran $kehadiran) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
            'keterangan' => 'required',
        ]);

        $kehadiran->update($validated);
        return redirect('/kehadiran')->with('success', 'Berhasil Mengubah Data.');
    }

}
