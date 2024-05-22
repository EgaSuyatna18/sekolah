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
        <th scope="col">Nama</th>
        <th scope="col">NUPTK</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">NIP</th>
        <th scope="col">Status Pegawai</th>
        <th scope="col">PTK</th>
        <th scope="col">Sertifikasi</th>
        <th scope="col">TMT</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pendidiks as $pendidik)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $pendidik->nama }}</td>
            <td>{{ $pendidik->nuptk }}</td>
            <td>{{ $pendidik->jenis_kelamin }}</td>
            <td>{{ $pendidik->tanggal_lahir }}</td>
            <td>{{ $pendidik->nip }}</td>
            <td>{{ $pendidik->status_pegawai }}</td>
            <td>{{ $pendidik->ptk }}</td>
            <td>{{ $pendidik->sertifikasi }}</td>
            <td>{{ $pendidik->tmt }}</td>
            <td>{{ $pendidik->mata_pelajaran }}</td>
            <td>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                onclick="setData('{{ $pendidik->id }}', '{{ $pendidik->nama }}', '{{ $pendidik->nuptk }}', '{{ $pendidik->jenis_kelamin }}', '{{ $pendidik->tanggal_lahir }}', '{{ $pendidik->nip }}', '{{ $pendidik->status_pegawai }}', '{{ $pendidik->ptk }}', '{{ $pendidik->sertifikasi }}', '{{ $pendidik->tmt }}', '{{ $pendidik->mata_pelajaran }}')">
                Ubah
              </button>
              <a href="/pendidik/{{ $pendidik->id }}" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-end">
    {{ $pendidiks->links() }}
  </div>

  <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/pendidik" method="post" id="tambahForm">
            @csrf
            <div class="mb-3">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>NUPTK</label>
              <input type="number" name="nuptk" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required>
                <label class="form-check-label" for="laki-laki">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label>Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>NIP</label>
              <input type="number" name="nip" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Status Pegawai</label>
              <select name="status_pegawai" class="form-control" required>
                <option value="">-- Pilih Status Pegawai --</option>
                <option value="honorer">Honorer</option>
                <option value="pns">PNS</option>
              </select>
            </div>
            <div class="mb-3">
              <label>PTK</label>
              <select name="ptk" class="form-control" required>
                <option value="">-- Pilih PTK --</option>
                <option>PTK Diasnogtik</option>
                <option>PTK Partisipan</option>
                <option>PTK Empiris</option>
                <option>PTK Eksperimental</option>
              </select>
            </div>
            <div class="mb-3">
              <label>Sertifikasi</label>
              <select name="sertifikasi" class="form-control" required>
                <option value="">-- Pilih Sertifikasi --</option>
                <option>Sertifikasi Pendidik</option>
                <option>Sertifikasi Kompetensi Guru</option>
                <option>Sertifikasi Guru Profesional</option>
                <option>Sertifikasi Internasional</option>
              </select>
            </div>
            <div class="mb-3">
              <label>TMT</label>
              <input type="date" name="tmt" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Mata Pelajaran</label>
              <input type="text" name="mata_pelajaran" class="form-control" required>
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
        <form action="/pendidik" method="post" id="ubahForm">
          @csrf
          @method('put')
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" id="ubahNama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>NUPTK</label>
            <input type="number" name="nuptk" id="ubahNUPTK" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="ubahLaki" value="laki-laki" required>
              <label class="form-check-label" for="ubahLaki">
                Laki-laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="ubahPerempuan" value="Perempuan" required>
              <label class="form-check-label" for="ubahPerempuan">
                Perempuan
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="ubahTanggalLahir" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>NIP</label>
            <input type="number" name="nip" id="ubahNIP" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Status Pegawai</label>
            <select name="status_pegawai" id="ubahStatusPegawai" class="form-control" required>
              <option value="">-- Pilih Status Pegawai --</option>
              <option value="honorer">Honorer</option>
              <option value="pns">PNS</option>
            </select>
          </div>
          <div class="mb-3">
            <label>PTK</label>
            <select name="ptk" id="ubahPTK" class="form-control" required>
              <option value="">-- Pilih PTK --</option>
              <option>PTK Diasnogtik</option>
              <option>PTK Partisipan</option>
              <option>PTK Empiris</option>
              <option>PTK Eksperimental</option>
            </select>
          </div>
          <div class="mb-3">
            <label>Sertifikasi</label>
            <select name="sertifikasi" id="ubahSertifikasi" class="form-control" required>
              <option value="">-- Pilih Sertifikasi --</option>
              <option>Sertifikasi Pendidik</option>
              <option>Sertifikasi Kompetensi Guru</option>
              <option>Sertifikasi Guru Profesional</option>
              <option>Sertifikasi Internasional</option>
            </select>
          </div>
          <div class="mb-3">
            <label>TMT</label>
            <input type="date" name="tmt" id="ubahTMT" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="ubahMataPelajaran" class="form-control" required>
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
  function setData(id, nama, nuptk, jenisKelamin, tanggalLahir, nip, statusPegawai, ptk, sertifikasi, tmt, mataPelajaran) {
    ubahForm.action = '/pendidik/' + id;
    ubahNama.value = nama;
    ubahNUPTK.value = nuptk;
    if(jenisKelamin == 'laki-laki') ubahLaki.checked = true;
    else ubahPerempuan.checked = true;
    ubahTanggalLahir.value = tanggalLahir;
    ubahNIP.value = nip;
    ubahStatusPegawai.value = statusPegawai;
    ubahPTK.value = ptk;
    ubahSertifikasi.value = sertifikasi;
    ubahTMT.value = tmt;
    ubahMataPelajaran.value = mataPelajaran;
  }
</script>
@endsection