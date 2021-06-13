<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function kota()
    {
        $nama = Kota::all();
        return view('kota.kotapage', compact('nama'));
    }
}
