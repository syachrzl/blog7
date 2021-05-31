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

    public function create()
    {
        return view('tambahnegara');
    }

    public function store(Request $request)
    {
        $negara = new Negara([
            'nama' => $request->input('nama'),
            'nama_inggris' => $request->input('nama_inggris'),
            'kode_telepon' => $request->input('kode_telepon'),
            'mata_uang' => $request->input('mata_uang'),
        ]);
        $negara->save();
        //Bedanya redirect dan view apa ya?
        return redirect('negarapage');
    }

    public function edit($id)
    {
        $negara = Negara::find($id);
        return view('editnegara', compact('negara'));
    }

    public function update(Request $request, $id)
    {
        $negara = Negara::find($id);
        $negara->nama = $request->input('nama');
        $negara->nama_inggris = $request->input('nama_inggris');
        $negara->kode_telepon = $request->input('kode_telepon');
        $negara->mata_uang = $request->input('mata_uang');
        $negara->save();
        return redirect('negarapage');
    }

    public function destroy($id)
    {
        $negara = Negara::find($id);
        $negara->delete();
        return redirect('negarapage');
    }
}
