<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('admin.pengguna.index',[
            // 'pengguna' => User::with('infrastrukturs')->whereHas('infrastrukturs')->get()
            'pengguna' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }
    
    public function store(Request $request)
    {
        User::create([
            'id_role' => $request->role,
            'nama' => $request->nama_pengguna,
            'username' => $request->username_pengguna,
            'password' => Hash::make($request->password_pengguna)
        ]);
        return redirect()->to(route('pengguna.index'));
    }

    public function edit(User $pengguna)
    {
        return view('admin.pengguna.edit',[
            'pengguna' => $pengguna
        ]);
    }

    public function update(Request $request, User $pengguna)
    {
        $pengguna->update([
            'id_role' => $request->role,
            'nama' => $request->nama_pengguna,
            'username' => $request->username_pengguna,
            // 'password' => Hash::make($request->password_pengguna)
        ]);
        return redirect()->to(route('pengguna.index'));

    }

    public function destroy(User $pengguna)
    {
        $pengguna->delete();
        return redirect()->to(route('pengguna.index'));
    }
}
