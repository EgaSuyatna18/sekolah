@extends('layouts.dashboard')
@section('content')
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Calon Siswa</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telp</th>
        <th scope="col">Email</th>
        <th scope="col">Nama Wali</th>
        <th scope="col">No Telp Wali</th>
        <th scope="col">Akta Kelahiran</th>
        <th scope="col">Kartu Keluarga</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pendaftarans as $pendaftaran)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $pendaftaran->nama_calon_siswa }}</td>
            <td>{{ $pendaftaran->jenis_kelamin }}</td>
            <td>{{ $pendaftaran->tempat_lahir }}</td>
            <td>{{ $pendaftaran->tanggal_lahir }}</td>
            <td>{{ $pendaftaran->alamat }}</td>
            <td>{{ $pendaftaran->no_telp }}</td>
            <td>{{ $pendaftaran->email }}</td>
            <td>{{ $pendaftaran->nama_wali }}</td>
            <td>{{ $pendaftaran->no_telp_wali }}</td>
            <td><a href="/storage/{{ $pendaftaran->akta_kelahiran }}" target="_blank">Link</a></td>
            <td><a href="/storage/{{ $pendaftaran->kartu_keluarga }}" target="_blank">Link</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-end">
    {{ $pendaftarans->links() }}
  </div>
@endsection