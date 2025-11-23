@extends('layout')

@section('title')

@endsection

@section('content')
<div class="jumbotron text-center bg-light p-5">
    <h1 class="display-4">Selamat Datang di Manajemen Data Siswa</h1>
    <p class="lead">Kelola data siswa dan kelas dengan mudah dan efisien.</p>
</div>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-3">
      <div class="card text-center shadow">
        <div class="card-body">
          <h5 class="card-title">Kelas</h5>
          <p class="card-text">Kelola daftar kelas dan wali kelas.</p>
          <a href="/kelas" class="btn btn-primary">Lihat Kelas</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card text-center shadow">
        <div class="card-body">
          <h5 class="card-title">Siswa</h5>
          <p class="card-text">Kelola data siswa.</p>
          <a href="/siswa" class="btn btn-primary">Lihat Data</a>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection