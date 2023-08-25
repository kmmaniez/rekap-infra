@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Input Infrastruktur</h3>
            <form action="" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-lg">
                        <div class="form-group mb-2">
                            <label for="infra">Infrastuktur</label>
                            <input type="text" class="form-control" name="infra" id="infra">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="penanggung_jwb">Penanggung Jawab</label>
                            <select class="form-control" name="penanggung_jwb" id="penanggung_jwb">
                                @foreach ($penanggung as $key => $val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="pengguna">Pengguna</label>
                    <input type="text" class="form-control" name="pengguna" id="pengguna">
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ruang_simpan">Penyimpanan</label>
                    <select class="form-control" name="ruang_simpan" id="ruang_simpan">
                        @foreach ($ruangan as $ruang)
                        <option value="{{ $ruang->id }}">{{ $ruang->nama_ruangan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="ruang_pakai">Pemakaian</label>
                    <input type="text" class="form-control" name="ruang_pakai" id="ruang_pakai">
                </div>
                <button class="btn btn-md btn-secondary">Simpan</button>
            </form>
            {{-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Infrastruktur</th>
                        <th scope="col">Penanggungjawab</th>
                        <th scope="col">Pengguna</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Penyimpanan</th>
                        <th scope="col">Pemakaian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($infrastruktur as $infra)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $infra->nama_barang }}</td>
                            <td>{{ $infra->ruangans->nama_ruangan }}</td>
                            <td>{{ $infra->penggunas->name }}</td>
                            <td>{{ $infra->tanggal_dipakai }}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('ruangan.edit', $infra->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('hapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Tidak ada data, silahkan menambah <a
                                    href="{{ route('ruangan.create') }}">data</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table> --}}
            {{-- <div class="button-group" style="float: right">
                <a href="http://" class="btn btn-md btn-secondary">Save</a>
                <a href="http://" class="btn btn-md btn-secondary">Print</a>
            </div> --}}
        </div>
    </div>
@endsection
