<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel | {{ $title_page ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container p-2">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand text-uppercase" href="{{ route('dashboard') }}"> 
                    <img src="{{ asset('assets/logo.png') }}" style="width: 250px">
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-secondary btn-md w-100" onclick="return confirm('Anda ingin logout?')">Logout</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <ul class="list-group">
                    {{-- <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('ruangan.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('ruangan.*') ? 'active' : '') }}">Menu Ruangan</a> --}}
                    {{-- <a href="{{ route('pengguna.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('pengguna.create') ? 'active' : '') }}">Kelola Pengguna</a> --}}
                    {{-- <a href="{{ route('infrastruktur.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('infrastruktur.index') ? 'active' : '') }}">Menu Infrastruktur</a> --}}
                    <a href="{{ route('infrastruktur.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('infrastruktur.index') ? 'active' : '') }}">Menu Infrastruktur</a>
                    {{-- <a href="{{ route('pengguna.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('pengguna.*') ? 'active' : '') }}">Menu Pengguna</a> --}}
                    <a href="{{ route('infrastruktur.rekap') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('infrastruktur.rekap') ? 'active' : '') }}">Menu Infrastruktur</a>
                    <a href="{{ route('penanggungjawab.index') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('penanggungjawab.*') ? 'active' : '') }}">Menu Penanggungjawab</a>
                    <a href="{{ route('rekomendasi') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('rekomendasi') ? 'active' : '') }}">Rekomendasi Tata Letak Infrastruktur</a>
                    
                </ul>
            </div>
            <div class="col-lg-9">

                @yield('content')

            </div>
        </div>
        
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3>Test Cetak</h3>
                <ul class="list-group">
                    <a href="/cetakinfra" class="list-group-item list-group-item-action">Cetak Infrastruktur</a>
                    <a href="/cetakpengguna" class="list-group-item list-group-item-action">Cetak Pengguna</a>
                    <a href="/cetakpenanggungjwb" class="list-group-item list-group-item-action">Cetak Penanggungjawab</a>
                    <a href="/cetakrekomentataletak" class="list-group-item list-group-item-action">Cetak Rekomendasi tataletak</a>
                    
                </ul>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
