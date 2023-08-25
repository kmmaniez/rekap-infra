@extends('layouts.main')

@section('content')
    <h3>Dashboard</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Infrastructure</h5>
                    <p class="card-text">{{ $totalinfrastruktur }}</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Pengguna</h5>
                    <p class="card-text">{{ $totalpengguna }}</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Ruangan</h5>
                    <p class="card-text">{{ $totalruangan }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
