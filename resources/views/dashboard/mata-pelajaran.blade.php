@extends('layouts.dashboard')
@section('content')
    <div class="row g-5 mt-4">
        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 1</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/1" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[0]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[0]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[0]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[0]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[0]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[0]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[0]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[0]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[0]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[0]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[0]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[0]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 2</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/2" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[1]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[1]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[1]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[1]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[1]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[1]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[1]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[1]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[1]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[1]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[1]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 3</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/3" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[1]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[1]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[1]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[1]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[1]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[1]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[1]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[1]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[1]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[1]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[1]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[1]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 4</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/4" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[3]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[3]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[3]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[3]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[3]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[3]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[3]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[3]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[3]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[3]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[3]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[3]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 5</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/5" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[4]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[4]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[4]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[4]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[4]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[4]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[4]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[4]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[4]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[4]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[4]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[4]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <h1 class="text-center">Kelas 6</h1>
                <div class="card-body">
                    <form action="/mata_pelajaran/6" method="post">
                        @csrf
                        <label>Senin - Jum'at</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel1">08.00 - 08.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel1 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel1" id="mapel1" value="{{ $mataPelajaran[5]->mapel1 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel2">08.30 - 09.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel2 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel2" id="mapel2" value="{{ $mataPelajaran[5]->mapel2 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel3">09.15 - 10.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel3 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel3" id="mapel3" value="{{ $mataPelajaran[5]->mapel3 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel4">10.00 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel4 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel4" id="mapel4" value="{{ $mataPelajaran[5]->mapel4 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel5">10.15 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel5 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel5" id="mapel5" value="{{ $mataPelajaran[5]->mapel5 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel6">11.00 - 11.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel6 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel6" id="mapel6" value="{{ $mataPelajaran[5]->mapel6 }}">
                            </div>
                        </div>
                        <label>Sabtu</label>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel7">08.00 - 08.45</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel7 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel7" id="mapel7" value="{{ $mataPelajaran[5]->mapel7 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel8">08.45 - 09.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel8 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel8" id="mapel8" value="{{ $mataPelajaran[5]->mapel8 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel9">09.30 - 10.15</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel9 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel9" id="mapel9" value="{{ $mataPelajaran[5]->mapel9 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel10">10.15 - 10.30</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel10 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel10" id="mapel10" value="{{ $mataPelajaran[5]->mapel10 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                              <span class="input-group-text" id="mapel11">10.30 - 11.00</span>
                              <input type="text" class="form-control {{ ($mataPelajaran[5]->mapel11 == 'Istirahat') ? 'btn btn-success' : '' }}" name="mapel11" id="mapel11" value="{{ $mataPelajaran[5]->mapel11 }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection