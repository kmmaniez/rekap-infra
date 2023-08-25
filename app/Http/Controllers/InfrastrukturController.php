<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfrastrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.infrastruktur.index',[
            'infrastruktur' => Infrastruktur::query()
                                ->with('ruangans','penggunas')
                                // ->where(DB::raw('YEAR(tanggal_dipakai)'),date('Y'))
                                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penanggung = [
            'Fadlul Khoiri',
            'Romi Husni Ependi',
            'Ezra Atmanda',
            'Derry Muhammad Iqbal',
           ' Haridsyah Anshari Firdaus',
            'Setiyo Gunawan',
            'Ulima Anis Syifa',
            'Fandika Zainul Adian',
            'Bintoro Abdillah',
            'Badr Khaerudin',
            'Fathin Hasbi Taufik',
            'Marsi Abdul Rafi',
            'Rifal Putra Ardinata',
            'Eki Subaeki',
            'Nadila',
        ];
        return view('admin.infrastruktur.create',[
            'ruangan' => Ruangan::all(),
            'pengguna' => User::all(),
            'penanggung' => $penanggung
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Infrastruktur $infrastruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infrastruktur $infrastruktur)
    {
        return view('admin.infrastruktur.edit',[
            'infrastruktur' => $infrastruktur,
            'ruangan' => Ruangan::all(),
            'pengguna' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infrastruktur $infrastruktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infrastruktur $infrastruktur)
    {
        //
    }

    public function rekapInfrastruktur(Request $request)
    {
        if ($request->query()) {
            # code...
            dump($request);
        }
        return view('admin.rekap.index');
    }
}
