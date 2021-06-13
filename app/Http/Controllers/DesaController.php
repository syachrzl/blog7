<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function desa()
    {
        $nama = Desa::all();
        return view('desa.desapage', compact('nama'));
    }
}
