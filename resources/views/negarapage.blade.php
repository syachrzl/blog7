@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Negara</center></h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama Negara</th>
            <th>English Name</th>
            <th>Kode Telefon</th>
            <th>Mata Uang</th>
            <th width="230px" style="text-align: center">Action</th>
        </tr>
    @foreach ($nama as $item)
    <tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->nama_inggris}}</td>
        <td>{{$item->kode_telepon}}</td>
        <td>{{$item->mata_uang}}</td>
        <td>
                <form action="" method="POST">
    
                <a class="btn btn-secondary" href="">Tampil</a>

                <a class="btn btn-primary" href="">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection