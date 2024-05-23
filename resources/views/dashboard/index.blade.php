@extends('layouts.dashboard')
@section('content')
    @if (auth()->user()->role == 'admin')
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Siswa</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/siswa">jumlah siswa</a>
                        <div class="small text-white">{{ $siswa }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Pendidik</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/pendidik">jumlah pendidik</a>
                        <div class="small text-white">{{ $pendidik }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Prestasi</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/prestasi">jumlah prestasi</a>
                        <div class="small text-white">{{ $prestasi }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Berita</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/berita">jumlah berita</a>
                        <div class="small text-white">{{ $berita }}</div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center w-50 m-auto mt-4 mb-5">
            <form id="searchForm">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" id="key">
                    <button class="btn btn-outline-primary" type="submit" onclick="searchForm.action = '/dashboard/' + key.value + '/search'"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>

        @if (session()->has('kehadirans'))
        <h1>Kehadiran</h1>
        <table class="table table-hover table-striped mb-5 border border-1 shadow shadow-lg">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Pulang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach (session()->get('kehadirans') as $kehadiran)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $kehadiran->siswa->nama }}</td>
                    <td>{{ $kehadiran->kelas }}</td>
                    <td>{{ $kehadiran->tanggal }}</td>
                    <td>{{ $kehadiran->jam_masuk }}</td>
                    <td>{{ $kehadiran->jam_pulang }}</td>
                    <td>{{ $kehadiran->keterangan }}</td>
                    <td>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                        onclick="setData('{{ $kehadiran->id }}', '{{ $kehadiran->siswa->id }}', '{{ $kehadiran->kelas }}', '{{ $kehadiran->tanggal }}', '{{ $kehadiran->jam_masuk }}', '{{ $kehadiran->jam_pulang }}', '{{ $kehadiran->keterangan }}')">
                        Ubah
                      </button>
                      <a href="/kehadiran/{{ $kehadiran->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        
          <div class="d-flex justify-content-end">
            {{ session()->get('kehadirans')->links() }}
          </div>
        @endif

        @if (session()->has('nilais'))
        <h1>Nilai</h1>
            <table class="table table-hover table-striped mb-5 border border-1 shadow shadow-lg">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Nilai Ulangan</th>
                    <th scope="col">Nilai Ujian Akhir</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach (session()->get('nilais') as $nilai)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $nilai->siswa->nama }}</td>
                        <td>{{ $nilai->kelas }}</td>
                        <td>{{ $nilai->mata_pelajaran }}</td>
                        <td>{{ $nilai->nilai_tugas }}</td>
                        <td>{{ $nilai->nilai_ulangan }}</td>
                        <td>{{ $nilai->nilai_ujian_akhir }}</td>
                        <td>{{ $nilai->rata_rata }}</td>
                        <td>{!! ($nilai->rata_rata >= 70) ? '<p class="btn btn-success">Lulus</p>' : '<p class="btn btn-danger">Tidak Lulus</p>' !!}</td>
                        <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                            onclick="setData('{{ $nilai->id }}', '{{ $nilai->siswa->id }}', '{{ $nilai->kelas }}', '{{ $nilai->mata_pelajaran }}', '{{ $nilai->nilai_tugas }}', '{{ $nilai->nilai_ulangan }}', '{{ $nilai->nilai_ujian_akhir }}', '{{ $nilai->rata_rata }}')">
                            Ubah
                        </button>
                        <a href="/nilai/{{ $nilai->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        
            <div class="d-flex justify-content-end">
                {{ session()->get('nilais')->links() }}
            </div>
        @endif

        @if (session()->has('prestasis'))
        <h1>Prestasi</h1>
            <table class="table table-hover table-striped border border-1 shadow shadow-lg">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Prestasi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach (session()->get('prestasis') as $prestasi)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $prestasi->siswa->nama }}</td>
                        <td>{{ $prestasi->kelas }}</td>
                        <td>{{ $prestasi->prestasi }}</td>
                        <td>{{ $prestasi->tanggal }}</td>
                        <td>{{ $prestasi->keterangan }}</td>
                        <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                            onclick="setData('{{ $prestasi->id }}', '{{ $prestasi->siswa->id }}', '{{ $prestasi->kelas }}', '{{ $prestasi->prestasi }}', '{{ $prestasi->tanggal }}', '{{ $prestasi->keterangan }}')">
                            Ubah
                        </button>
                        <a href="/prestasi/{{ $prestasi->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
            <div class="d-flex justify-content-end">
                {{ session()->GET('prestasis')->links() }}
            </div>
        @endif
    @endif
@endsection