<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Desa;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $nama = Kota::all();
        return view('katalog', compact('nama'));
    }

    public function desa()
    {
        $nama = Desa::all();
        return view('desa', compact('nama'));
    }
}
