<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negara;


class NegaraController extends Controller
{
    public function negara()
    {
        //Mengambil semua data dari table
        $nama = Negara::all();
        return view('negara.negarapage', compact('nama'));
    }

    public function create()
    {
        //Memuat halaman tambah negara
        return view('negara.tambahnegara');
    }

    public function store(Request $request)
    {
        //Membuat variable dengan memasukan data formulir kedalam array
        $negara = new Negara([
            'nama' => $request->input('nama'),
            'nama_inggris' => $request->input('nama_inggris'),
            'kode_telepon' => $request->input('kode_telepon'),
            'mata_uang' => $request->input('mata_uang'),
        ]);
        //Menyimpan data
        $negara->save();
        return redirect('negarapage');
    }

    public function edit($id)
    {
        //Membuat variable dengan memasukan data table dengan id yang spesifik
        $negara = Negara::find($id);
        return view('negara.editnegara', compact('negara'));
    }

    public function update(Request $request, $id)
    {
        //Update
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
        //Delete
        $negara = Negara::find($id);
        $negara->delete();
        return redirect('negarapage');
    }
}
