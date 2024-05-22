<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
    function index() {
        $title = config('app.name') . ' | Mata Pelajaran';
        $mataPelajaran = MataPelajaran::all();
        return view('dashboard.mata-pelajaran', compact('title', 'mataPelajaran'));
    }

    function setMapel(Request $request, $kelas) {
        $validated = $request->validate([
            'mapel1' => 'required',
            'mapel2' => 'required',
            'mapel3' => 'required',
            'mapel4' => 'required',
            'mapel5' => 'required',
            'mapel6' => 'required',
            'mapel7' => 'required',
            'mapel8' => 'required',
            'mapel9' => 'required',
            'mapel10' => 'required',
            'mapel11' => 'required',
        ]);

        $mataPelajaran = MataPelajaran::firstOrNew(['id' => $kelas]);
        $mataPelajaran->kelas = 'Kelas ' . $kelas;
        $mataPelajaran->mapel1 = $validated['mapel1'];
        $mataPelajaran->mapel2 = $validated['mapel2'];
        $mataPelajaran->mapel3 = $validated['mapel3'];
        $mataPelajaran->mapel4 = $validated['mapel4'];
        $mataPelajaran->mapel5 = $validated['mapel5'];
        $mataPelajaran->mapel6 = $validated['mapel6'];
        $mataPelajaran->mapel7 = $validated['mapel7'];
        $mataPelajaran->mapel8 = $validated['mapel8'];
        $mataPelajaran->mapel9 = $validated['mapel9'];
        $mataPelajaran->mapel10 = $validated['mapel10'];
        $mataPelajaran->mapel11 = $validated['mapel11'];
        $mataPelajaran->save();

        return redirect('/mata_pelajaran')->with('success', 'Berhasil mengubah mata pelajaran');
    }
}
