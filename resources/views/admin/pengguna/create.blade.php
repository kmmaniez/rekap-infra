@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Tambah Pengguna</h3>
            <form action="{{ route('pengguna.store') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna">
                </div>
                <div class="form-group mb-2">
                    <label for="username_pengguna">Username Pengguna</label>
                    <input type="text" class="form-control" name="username_pengguna" id="username_pengguna">
                </div>
                <div class="form-group mb-2">
                    <label for="username_pengguna">Role Pengguna</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="1" id="admin">
                        <label class="form-check-label" for="admin">Admin</label> 
                    </div> 
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="2" id="pengguna">
                        <label class="form-check-label" for="pengguna">Pengguna</label> 
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="password_pengguna">Password Pengguna</label>
                    <input type="password" class="form-control" name="password_pengguna" id="password_pengguna">
                </div>
                <button class="btn btn-md btn-secondary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
