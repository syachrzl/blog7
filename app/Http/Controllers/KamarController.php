<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Desa;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function kota()
    {
        $nama = Kota::all();
        return view('kotapage', compact('nama'));
    }

    public function desa()
    {
        $nama = Desa::all();
        return view('desapage', compact('nama'));
    }
}
