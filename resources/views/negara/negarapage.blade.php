@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Negara</center></h1>
    <a href="{{url("negarapage/create")}}" class="btn btn-success mb-1">Tambah Baru</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama Negara</th>
            <th>English Name</th>
            <th>Kode Telefon</th>
            <th>Mata Uang</th>
            <th width="230px" style="text-align:center" colspan="2">Action</th>
        </tr>
    @foreach ($nama as $item)
    <tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->nama_inggris}}</td>
        <td>{{$item->kode_telepon}}</td>
        <td>{{$item->mata_uang}}</td>
        <td> 
            <a class="btn btn-primary" href="{{url("negarapage/{$item->id}/edit")}}">Edit</a>
        </td>
        <td>
           <form action="{{url("negarapage/{$item->id}")}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" href="" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection