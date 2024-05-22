<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Storage;

class BeritaController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Berita';
        $beritas = Berita::orderBy('created_at', 'DESC')->paginate(5);
        return view('dashboard.berita', compact('title', 'beritas'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $validated['foto'] = $request->file('foto')->store('foto-berita');

        Berita::create($validated);

        return redirect('/berita')->with('success', 'Berhasil Menambah Data.');
    }

    function destroy(Berita $berita) {
        Storage::delete($berita->foto);
        $berita->delete();
        return redirect('/berita')->with('success', 'Berhasil Menghapus Data.');
    }

    function update(Request $request, Berita $berita) {
        $rules = [
            'judul' => 'required',
            'isi' => 'required'
        ];

        if($request->file('foto')) $rules['foto'] = 'required|image|mimes:jpg,jpeg,png|max:2048';

        $validated = $request->validate($rules);

        if($request->file('foto')) {
            Storage::delete($berita->foto);
            $validated['foto'] = $request->file('foto')->store('foto-berita');
        }

        $berita->update($validated);

        return redirect('/berita')->with('success', 'Berhasil Mengubah Data.');
    }
}