<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Storage;

class SiswaController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Siswa';
        $siswas = Siswa::paginate(10);
        return view('dashboard.siswa', compact('title', 'siswas'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nama_orangtua' => 'required'
        ]);

        $validated['foto'] = $request->file('foto')->store('foto-siswa');

        Siswa::create($validated);

        return redirect('/siswa')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Siswa $siswa) {
        Storage::delete($siswa->foto);
        $siswa->delete();
        return redirect('/siswa')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Siswa $siswa) {
        $rules = [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nama_orangtua' => 'required'
        ];

        if($request->file('foto')) $rules['foto'] = 'required|image|mimes:jpg,jpeg,png|max:2048';

        $validated = $request->validate($rules);

        if($request->file('foto')) {
            Storage::delete($siswa->foto);
            $validated['foto'] = $request->file('foto')->store('foto-siswa');
        }

        $siswa->update($validated);

        return redirect('/siswa')->with('success', 'Berhasil Mengubah Data.');
    }
}
