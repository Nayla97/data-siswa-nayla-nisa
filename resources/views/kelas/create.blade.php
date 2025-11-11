@extends('layout')

@section('title')
Tambah Kelas
@endsection

@section('content')
<form action="{{ url('kelas/store') }}" method="post">
    @csrf
    <div class="mb-3">
        <div class="row">
            <div class="col-md-7">
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </div>
</form>
@endsection