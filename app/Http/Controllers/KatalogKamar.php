<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogKamar extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $judul = "Baca Data & Tampilkan";
        return view('katalog', compact('judul'));
    }
}
