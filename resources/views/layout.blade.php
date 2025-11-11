<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Beranda')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-2" href="{{ url('/') }}">Manajemen Data Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('kelas') }}">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Kelas</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <main class="py-2">
        <div class="container-fluid">
            <h1>@yield('title')</h1>
            <hr>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            &copy; Manajemen Data Nayla-Nisa {{ date('Y') }}
        </div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>