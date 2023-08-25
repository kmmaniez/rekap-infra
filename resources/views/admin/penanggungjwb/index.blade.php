@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Rekap Penanggungjawab</h3>
            <a href="{{ route('penanggungjawab.create') }}" class="btn btn-md btn-primary mb-2">Tambah Penanggung Jawab</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fadlul Khoiri</td>
                    </tr>
                    <tr>
                        <td>Romi Husni Ependi</td>
                    </tr>
                    <tr>
                        <td>Ezra Atmanda</td>
                    </tr>
                    <tr>
                        <td>Derry Muhammad Iqbal</td>
                    </tr>
                    {{-- @forelse ($pengguna as $pengguna)
                        <tr>
                            <td>{{ $pengguna->name }}</td>
                            <td>{{ $pengguna->infrastrukturs[0]->nama_barang }}</td>
                            <td>{{ $pengguna->infrastrukturs[0]->tanggal_dipakai }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Tidak ada data, silahkan menambah <a
                                    href="{{ route('pengguna.create') }}">data</a></td>
                        </tr>
                    @endforelse --}}
                </tbody>
            </table>
            {{-- <div class="button-group" style="float: right">
                <a href="http://" class="btn btn-md btn-secondary">Save</a>
                <a href="http://" class="btn btn-md btn-secondary">Print</a>
            </div> --}}
        </div>
    </div>
@endsection
