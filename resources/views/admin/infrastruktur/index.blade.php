@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Rekap Infrastruktur</h3>
            <a href="{{ route('infrastruktur.create') }}" class="btn btn-md btn-primary mb-2">Tambah Data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        {{-- <th scope="col">No</th> --}}
                        <th scope="col">Nama Infrastruktur</th>
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Tanggal Dipakai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dump($infrastruktur) --}}
                    @foreach ($infrastruktur as $infra)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $infra->nama_barang }}</td>
                        <td>{{ $infra->ruangans->nama_ruangan }}</td>
                        <td>{{ $infra->penggunas->nama }}</td>
                        <td>{{ $infra->tgl_mulai }}</td>
                        <td>{{ $infra->tgl_selesai }}</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('infrastruktur.edit', $infra->id) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('hapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
