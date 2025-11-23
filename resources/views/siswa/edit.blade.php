@extends('layout')

@section('title')
Edit Siswa
@endsection

@section('content')
<form method="POST" action="{{ url('siswa/update'.$siswa->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" required>
    </div>
    <div class="mb-3">
        <img src="{{ asset('uploads/'.$siswa->foto) }}" width="75px"><br><br>
        <label class="from-label">Kelas</label>
        <select name="kelas" class="form-select">
            @foreach($Kelas as $k)
            <option value="{{ $k->id }}" {{ ($k->id == $siswa->kelas_id) ? 'selected' : '' }}>
                {{ $k->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nomor Induk Siswa</label>
        <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa" value="{{ $siswa->nis }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Siswa</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required value="{{ $siswa->nama }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <div class="mt-2">
            <label>
                <input type="radio" name="jk" value="1" {{ ($siswa->jk == 1) ? 'checked' : '' }}>Laki-Laki
            </label>
            <label>
                <input type="radio" name="jk" value="2" {{ ($siswa->jk == 2) ? 'checked' : ''}}>Perempuan
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $siswa->tanggal_lahir }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Sosial Media</label>
        <input type="text" name="sosial_media" class="form-control" value="{{ $siswa->sosial_media }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" required name="alamat">{{ $siswa->alamat }}</textarea>    
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </div>
</form>
@endsection