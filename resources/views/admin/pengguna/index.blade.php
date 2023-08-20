@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Rekap Pengguna</h3>
            <a href="{{ route('pengguna.create') }}" class="btn btn-md btn-primary mb-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        {{-- <th scope="col">Infrastruktur</th>
                        <th scope="col">Tanggal Digunakan</th> --}}
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengguna as $pengguna)
                        <tr>
                            <td>{{ $pengguna->nama }}</td>
                            <td>{{ $pengguna->username }}</td>
                            <td>
                                @if ($pengguna->id_role == 1)
                                    Admin
                                @else
                                    Pengguna
                                @endif
                            </td>
                            {{-- <td>{{ $pengguna->infrastrukturs[0]->nama_barang }}</td>
                            <td>{{ $pengguna->infrastrukturs[0]->tanggal_dipakai }}</td> --}}
                            <td>
                                <form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('pengguna.edit', $pengguna->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('hapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Tidak ada data, silahkan menambah <a
                                    href="{{ route('pengguna.create') }}">data</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
