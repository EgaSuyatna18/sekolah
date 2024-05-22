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
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beritas as $berita)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td><img src="/storage/{{ $berita->foto }}" alt="errorIMG" class="img-fluid w-100"></td>
            <td>{{ $berita->judul }}</td>
            <td style="overflow: scroll;">{{ $berita->isi }}</td>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                onclick="setData('{{ $berita->id }}', '{{ $berita->judul }}', '{{ $berita->isi }}')">
                Ubah
              </button>
              <a href="/berita/{{ $berita->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-end">
    {{ $beritas->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/berita" method="post" id="tambahForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label>Foto</label>
              <input type="file" name="foto" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Isi</label>
              <textarea name="isi" class="form-control"></textarea>
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
            <label>Judul</label>
            <input type="text" name="judul" id="ubahJudul" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" id="ubahISI" class="form-control"></textarea>
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
  function setData(id, judul, isi) {
    ubahForm.action = '/berita/' + id;
    ubahJudul.value = judul;
    ubahISI.value = isi;
  }
</script>
@endsection