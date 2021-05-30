<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Desa;
use App\Models\Negara;
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

    public function negara()
    {
        $nama = Negara::all();
        return view('negarapage', compact('nama'));
    }

    public function tambahnegara()
    {
        return view('tambahnegara');
    }
}
