<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenanggungJawabController extends Controller
{
    public function index()
    {
        return view('admin.penanggungjwb.index');
    }
    
    public function create()
    {
        return view('admin.penanggungjwb.create');
    }
}
