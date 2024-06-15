<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    function daftar(Request $request) {
        $validated = $request->validate([
            'nama_calon_siswa' => 'required',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'sometimes',
            'nama_wali' => 'required',
            'no_telepon_wali' => 'required',
            'akta_kelahiran' => 'required|max:10000|mimes:doc,docx,pdf',
            'kartu_keluarga' => 'required|max:10000|mimes:doc,docx,pdf'

        ]);

        $validated['akta_kelahiran'] = $request->file('akta_kelahiran')->store('akta-kelahiran');
        $validated['kartu_keluarga'] = $request->file('kartu_keluarga')->store('kartu-keluarga');

        Pendaftaran::create($validated);
        
        return redirect('/')->with('success', 'Berhasil melakukan pendaftaran.');
    }
    
    function pendaftaran() {
        $title = config('app.name') . ' | Pendaftaran';
        $pendaftarans = Pendaftaran::paginate(10);
        return view('dashboard.pendaftaran', compact('title', 'pendaftarans'));
    }
}
