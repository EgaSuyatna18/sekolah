@extends('layouts.dashboard')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
  Tambah
</button>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nama Orangtua</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $siswa)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td><img src="/storage/{{ $siswa->foto }}" alt="errorIMG" class="img-fluid" style="width: 300px; height: 300px;"></td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->tanggal_lahir }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->nama_orangtua }}</td>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                onclick="setData('{{ $siswa->id }}', '{{ $siswa->nama }}', '{{ $siswa->tanggal_lahir }}', '{{ $siswa->alamat }}', '{{ $siswa->nama_orangtua }}')">
                Ubah
              </button>
              <a href="/siswa/{{ $siswa->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-end">
    {{ $siswas->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/siswa" method="post" id="tambahForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label>Foto</label>
              <input type="file" name="foto" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
              <label>Nama Orangtua</label>
              <input type="text" name="nama_orangtua" class="form-control" required>
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
        <form action="/pendidik" method="post" id="ubahForm" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" id="ubahNama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="ubahTanggalLahir" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" id="ubahAlamat" required></textarea>
          </div>
          <div class="mb-3">
            <label>Nama Orangtua</label>
            <input type="text" name="nama_orangtua" id="ubahNamaOrangtua" class="form-control" required>
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

<script>
  function setData(id, nama, tanggalLahir, alamat, namaOrangtua) {
    ubahForm.action = '/siswa/' + id;
    ubahNama.value = nama;
    ubahTanggalLahir.value = tanggalLahir;
    ubahAlamat.value = alamat;
    ubahNamaOrangtua.value = namaOrangtua;
  }
</script>
@endsection