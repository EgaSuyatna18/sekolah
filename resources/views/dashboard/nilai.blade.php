@extends('layouts.dashboard')
@section('content')
<link rel="stylesheet" href="/assets/tomselect/tom-select.min.css">
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
  Tambah
</button>
  <table class="table table-hover table-striped">
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
      @foreach ($nilais as $nilai)
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
    {{ $nilais->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/nilai" method="post" id="tambahForm">
            @csrf
            <div class="mb-3">
              <label>Nama Siswa</label>
              <select name="siswa_id" id="siswaTambah" class="form-control" required>
                <option value="">-- Pilih Siswa --</option>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label>Kelas</label>
              <input type="text" name="kelas" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Mata Pelajaran</label>
              <input type="text" name="mata_pelajaran" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Nilai Tugas</label>
              <input type="number" name="nilai_tugas" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Nilai Ulangan</label>
              <input type="number" name="nilai_ulangan" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Nilai Ujian Akhir</label>
              <input type="number" name="nilai_ujian_akhir" class="form-control" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" form="tambahForm">Tambah</button>
        </div>
      </div>
    </div>
  </div>

  

<!-- Modal -->
<div class="modal fade" id="ubahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ubahModalLabel">Ubah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/nilai" method="post" id="ubahForm">
          @csrf
          @method('put')
          <div class="mb-3">
            <label>Nama Siswa</label>
            <select name="siswa_id" id="siswaUbah" class="form-control" required>
              <option value="">-- Pilih Siswa --</option>
              @foreach ($siswas as $siswa)
                  <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" id="ubahKelas" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="ubahMataPelajaran" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Nilai Tugas</label>
            <input type="number" name="nilai_tugas" id="ubahNilaiTugas" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Nilai Ulangan</label>
            <input type="number" name="nilai_ulangan" id="ubahNilaiUlangan" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Nilai Ujian Akhir</label>
            <input type="number" name="nilai_ujian_akhir" id="ubahNilaiUjianAkhir" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Rata-Rata</label>
            <input type="number" id="ubahRataRata" class="form-control" readonly>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="ubahForm" class="btn btn-warning">Ubah</button>
      </div>
    </div>
  </div>
</div>

<script src="/assets/tomselect/tom-select.complete.js"></script>

<script>
  function setData(id, siswaID, kelas, mataPelajaran, nilaiTugas, nilaiUlangan, nilaiUjianAkhir, rataRata) {
    ubahForm.action = '/nilai/' + id;
    siswaUbah.setValue(siswaID);
    ubahKelas.value = kelas;
    ubahMataPelajaran.value = mataPelajaran;
    ubahNilaiTugas.value = nilaiTugas;
    ubahNilaiUlangan.value = nilaiUlangan;
    ubahNilaiUjianAkhir.value = nilaiUjianAkhir;
    ubahRataRata.value = rataRata;
  }

  new TomSelect("#siswaTambah",{
    create: true,
    sortField: {
      field: "text",
      direction: "asc"
    }
  });

  const siswaUbah = new TomSelect("#siswaUbah",{
    create: true,
    sortField: {
      field: "text",
      direction: "asc"
    }
  });
</script>
@endsection