<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $nama = Kota::all();
        return view('katalog', compact('nama'));
    }
}
