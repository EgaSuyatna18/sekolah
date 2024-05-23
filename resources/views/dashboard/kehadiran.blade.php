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
        <th scope="col">Tanggal</th>
        <th scope="col">Jam Masuk</th>
        <th scope="col">Jam Pulang</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kehadirans as $kehadiran)
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
    {{ $kehadirans->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/kehadiran" method="post" id="tambahForm">
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
              <label>Tanggal</label>
              <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Jam Masuk</label>
              <input type="time" name="jam_masuk" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Jam Pulang</label>
              <input type="time" name="jam_pulang" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Keterangan</label>
              <select name="keterangan" class="form-control" required>
                <option value="">-- Pilih Keterangan --</option>
                <option>Hadir</option>
                <option>Izin</option>
                <option>Sakit</option>
                <option>Bolos</option>
              </select>
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
        <form action="/kehadiran" method="post" id="ubahForm">
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
            <label>Tanggal</label>
            <input type="date" name="tanggal" id="ubahTanggal" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jam Masuk</label>
            <input type="time" name="jam_masuk" id="ubahJamMasuk" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jam Pulang</label>
            <input type="time" name="jam_pulang" id="ubahJamPulang" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Keterangan</label>
            <select name="keterangan" id="ubahKeterangan" class="form-control" required>
              <option value="">-- Pilih Keterangan --</option>
              <option>Hadir</option>
              <option>Izin</option>
              <option>Sakit</option>
              <option>Bolos</option>
            </select>
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
  function setData(id, siswaID, kelas, tanggal, jamMasuk, jamPulang, keterangan) {
    ubahForm.action = '/kehadiran/' + id;
    siswaUbah.setValue(siswaID);
    ubahKelas.value = kelas;
    ubahTanggal.value = tanggal;
    ubahJamMasuk.value = jamMasuk;
    ubahJamPulang.value = jamPulang;
    ubahKeterangan.value = keterangan;
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