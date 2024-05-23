<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;

class NilaiController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Nilai';
        $nilais = Nilai::with('siswa')->paginate(10);
        $siswas = Siswa::all();
        return view('dashboard.nilai', compact('title', 'nilais', 'siswas'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'mata_pelajaran' => 'required',
            'nilai_tugas' => 'required',
            'nilai_ulangan' => 'required',
            'nilai_ujian_akhir' => 'required',
        ]);

        $validated['rata_rata'] = ($validated['nilai_tugas'] + $validated['nilai_ulangan'] + $validated['nilai_ujian_akhir']) / 3;

        Nilai::create($validated);

        return redirect('/nilai')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Nilai $nilai) {
        $nilai->delete();
        return redirect('/nilai')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Nilai $nilai) {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'kelas' => 'required',
            'mata_pelajaran' => 'required',
            'nilai_tugas' => 'required',
            'nilai_ulangan' => 'required',
            'nilai_ujian_akhir' => 'required',
        ]);

        $validated['rata_rata'] = ($validated['nilai_tugas'] + $validated['nilai_ulangan'] + $validated['nilai_ujian_akhir']) / 3;

        $nilai->update($validated);
        return redirect('/nilai')->with('success', 'Berhasil Mengubah Data.');
    }
}
