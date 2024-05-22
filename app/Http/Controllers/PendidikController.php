<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidik;

class PendidikController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Pendidik';
        $pendidiks = Pendidik::paginate(10);
        return view('dashboard.pendidik', compact('title', 'pendidiks'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nip' => 'required',
            'status_pegawai' => 'required',
            'ptk' => 'required',
            'sertifikasi' => 'required',
            'tmt' => 'required',
            'mata_pelajaran' => 'required'
        ]);

        Pendidik::create($validated);

        return redirect('/pendidik')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Pendidik $pendidik) {
        $pendidik->delete();
        return redirect('/pendidik')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Pendidik $pendidik) {
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nip' => 'required',
            'status_pegawai' => 'required',
            'ptk' => 'required',
            'sertifikasi' => 'required',
            'tmt' => 'required',
            'mata_pelajaran' => 'required'
        ]);

        $pendidik->update($validated);
        return redirect('/pendidik')->with('success', 'Berhasil Mengubah Data.');
    }
}
