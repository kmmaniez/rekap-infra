<?php

use App\Http\Controllers\CetakDokumenController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenanggungJawabController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RuanganController;
use App\Models\Infrastruktur;
use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.default');
});

/* ALAMAT UNTUK DASHBOARD */
Route::get('/dashboard', function(){
    return view('admin.dashboard', [
        'totalinfrastruktur' => Infrastruktur::all()->count(),
        'totalpengguna' => User::all()->count(),
        'totalruangan' => Ruangan::all()->count()
    ]);
})
->name('dashboard');
// ->middleware('auth')->name('dashboard');

/* ALAMAT UNTUK LOGIN */
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('ruangan', RuanganController::class);

/* ALAMAT UNTUK INFRASTRUKTUR */
// cth: localhost/infrastruktur
Route::get('/infrastruktur', [InfrastrukturController::class, 'index'])->name('infrastruktur.index');
Route::get('/infrastruktur/create', [InfrastrukturController::class, 'create'])->name('infrastruktur.create');
Route::get('/infrastruktur/{infrastruktur}/edit', [InfrastrukturController::class, 'edit'])->name('infrastruktur.edit');
Route::patch('/infrastruktur/{infrastruktur}', [InfrastrukturController::class, 'update'])->name('infrastruktur.update');
Route::delete('/infrastruktur/{infrastruktur}', [InfrastrukturController::class, 'index'])->name('infrastruktur.delete');

/* ALAMAT WEB KHUSUS REKAP & CETAK INFRA */
Route::get('/rekapinfra', [InfrastrukturController::class, 'rekapInfrastruktur'])->name('infrastruktur.rekap');

Route::get('/penanggungjawab', [PenanggungJawabController::class, 'index'])->name('penanggungjawab.index');
Route::get('/penanggungjawab/create', [PenanggungJawabController::class, 'create'])->name('penanggungjawab.create');


Route::view('/rekomendasi', 'admin.rekomendasi')->name('rekomendasi');

/* ALAMAT UNTUK CETAK */
Route::get('/cetakinfra', [CetakDokumenController::class, 'cetakinfra']);
Route::get('/cetakpengguna', [CetakDokumenController::class, 'cetakpengguna']);
Route::get('/cetakpenanggungjwb', [CetakDokumenController::class, 'cetakpenanggungjwb']);
Route::get('/cetakrekomentataletak', [CetakDokumenController::class, 'cetakrekomentataletak']);


/* ALAMAT UNTUK PENGGUNA.  */
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
Route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
Route::post('/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna/{pengguna}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna/{pengguna}', [PenggunaController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna/{pengguna}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

require __DIR__.'/auth.php';
