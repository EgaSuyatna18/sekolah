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
        <th scope="col">Prestasi</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($prestasis as $prestasi)
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
    {{ $prestasis->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/prestasi" method="post" id="tambahForm">
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
              <label>Prestasi</label>
              <input type="text" name="prestasi" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Tanggal</label>
              <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Keterangan</label>
              <textarea name="keterangan" class="form-control"></textarea>
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
        <form action="/prestasi" method="post" id="ubahForm">
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
            <label>Prestasi</label>
            <input type="text" name="prestasi" id="ubahPrestasi" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" id="ubahTanggal" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" id="ubahKeterangan" class="form-control"></textarea>
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
  function setData(id, siswaID, kelas, prestasi, tanggal, keterangan) {
    ubahForm.action = '/prestasi/' + id;
    siswaUbah.setValue(siswaID);
    ubahKelas.value = kelas;
    ubahPrestasi.value = prestasi;
    ubahTanggal.value = tanggal;
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