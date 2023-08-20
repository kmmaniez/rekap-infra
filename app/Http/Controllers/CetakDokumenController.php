<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class CetakDokumenController extends Controller
{
    public function cetakinfra()
    {
        $pdf    = PDF::loadView('admin.laporan.cetakinfra',[
            'title' => 'Rekap Infrastruktur'
        ]);
        return $pdf->download('cetak-infra.pdf');

        return view('admin.laporan.cetakinfra',['title' => 'Rekap Infrastruktur']);
    }

    public function cetakpengguna()
    {
        $pdf    = PDF::loadView('admin.laporan.cetakpengguna',[
            'title' => 'Rekap Pengguna'
        ]);
        return $pdf->download('cetak-pengguna.pdf');

        return view('admin.laporan.cetakpengguna',[
            'title' => 'Rekap Pengguna'
        ]);
    }

    public function cetakpenanggungjwb()
    {
        $pdf    = PDF::loadView('admin.laporan.cetakpenanggungjwb',[
            'title' => 'Rekap Penanggungjawab'
        ]);
        return $pdf->download('cetak-Penanggungjawab.pdf');

        return view('admin.laporan.cetakpenanggungjwb',[
            'title' => 'Rekap Penanggungjawab'
        ]);
    }

    public function cetakrekomentataletak()
    {
        $pdf    = PDF::loadView('admin.laporan.cetakinfra',[
            'title' => 'Rekomendasi Tata Letak Infrastruktur'
        ]);
        return $pdf->download('cetak-tataletak.pdf');

        return view('admin.laporan.rekomendasi',[
            'title' => 'Rekomendasi Tata Letak Infrastruktur'
        ]);
    }
}
