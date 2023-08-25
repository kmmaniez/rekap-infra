@extends('layouts.main')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Ubah Infrastruktur</h3>
            {{-- @dump($infrastruktur) --}}
            <form action="{{ route('infrastruktur.update', $infrastruktur->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-lg">
                        <div class="form-group mb-2">
                            <label for="infra">Infrastuktur</label>
                            <input type="text" class="form-control" name="infra" id="infra" value="{{ $infrastruktur->nama_barang }}">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="penanggung_jwb">Penanggung Jawab</label>
                            <input type="text" class="form-control" name="penanggung_jwb" id="penanggung_jwb">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="pengguna">Pengguna</label>
                    <select class="form-control" name="ruang_simpan" id="ruang_simpan">
                        @foreach ($pengguna as $user)
                        <option value="{{ $user->id }}" {{ (($infrastruktur->id_user) === $user->id) ? 'selected' : '' }}>{{ $user->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" value="{{ $infrastruktur->tgl_mulai }}">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" value="{{ $infrastruktur->tgl_selesai }}">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ruang_simpan">Penyimpanan</label>
                    <select class="form-control" name="ruang_simpan" id="ruang_simpan">
                        @foreach ($ruangan as $ruang)
                        <option value="{{ $ruang->id }}" {{ (($infrastruktur->id_ruang) === $ruang->id) ? 'selected' : '' }}>{{ $ruang->nama_ruangan }}</option>
                        @endforeach
                    </select>
                    {{-- {{ $infrastruktur->ruangans->nama_ruangan }} --}}
                </div>
                <div class="form-group mb-2">
                    <label for="ruang_pakai">Pemakaian</label>
                    <input type="text" class="form-control" name="ruang_pakai" id="ruang_pakai">
                </div>
                <button class="btn btn-md btn-secondary">Update</button>
            </form>
        </div>
    </div>
@endsection
