@extends('layout')

@section('title')
Data kelas
@endsection

@section('content')
<a href="{{ url('kelas/create') }}" class="btn btn-primary">
    Tambah kelas
</a>
<table class="table table-striped table-hover table-bordered mt-3">
    <thead>
        <tr>
            <td class="text-center">No</td>
            <td class="text-center">Nama</td>
            <td class="text-center">Aksi</td>
        </tr>
    </thead>
    <tbody>
        <!-- isi data -->
         @php $i = 1; @endphp
    <tbody>
        @foreach($kelas as $Kelas)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $Kelas->nama }}</td>
                <td class="text-center">
                    <a href="{{ url('kelas/'.$Kelas->id.'/edit') }}" class="btn btn-primary">
                        Edit
                    </a>
                    <a href="{{ url('kelas/'.$Kelas->id.'/delete') }}" class="btn btn-danger">
                        Hapus
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </tbody>
</table>
@endsection