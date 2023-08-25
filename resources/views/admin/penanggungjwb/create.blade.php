@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Input Penanggung Jawab</h3>
            <form action="" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="nama">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <button class="btn btn-md btn-secondary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
