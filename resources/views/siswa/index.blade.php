@extends('layout')
@section('title')
Data Siswa
@endsection
@section('content')
<a href="{{ url('siswa/create') }}" class="btn btn-primary">
    Tambah Siswa
</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center">NIS</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">L/P</th>
            <th class="text-center">Tempat, Tanggal Lahir</th>
            <th class="text-center">Sosial Media</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Pilihan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswaa as $siswa)
        <tr>
            <td class="text-center">{{ $siswa->number }}</td>
            <td class="text-center"><img src="{{ asset('uploads/'.$siswa->picture) }}" width+75px></td>
            <td>{{ $siswa->name }}</td>
            <td>{{ $siswa->kelas->name }}</td>
            <td>{{ ($siswa->gender == 1)? 'L' : 'P}' }}</td>
            <td>{{ $siswa->birth_place }},{{ date("d-m-y",strtotime($siswa->birth_date)) }}</td>
            <td>{{ $siswa->socialmedia }}</td>
            <td>{{ $siswa->address }}</td>
            <td class="text-center">
                <a href="{{ url('siswa/'.$siswa->id.'/edit') }}" class="btn btn-success">Edit</a>
                <a href="{{ url('siswa/'.$siswa->id.'/delete') }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection