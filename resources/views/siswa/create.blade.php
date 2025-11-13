@extends('layout')

@section('title')
Tambah Siswa
@endsection

@section('content')
<form method="post" action="{{ url('kelas/store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" required>
    </div>
    <div class="mb-3">
        <label class="from-label">Kelas</label>
        <select name="kelas" class="form-select">
            @foreach($Kelas as $kelas)
            <option value="{{ $kelas->id }}">
                {{ $kelas->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nomor Induk Siswa</label>
        <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Siswa</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <div class="mt-2">
            <label>
                <input type="radio" name="jk" value="1">Laki-Laki
            </label>
            <label>
                <input type="radio" name="jk" value="2">Perempuan
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="text" name="tanggal_lahir" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sosial Media</label>
        <input type="text" name="social_media" class="form-control"required>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control"required>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </div>
</form>
@endsection