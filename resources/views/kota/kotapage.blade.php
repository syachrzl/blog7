@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Kota</center></h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama Kota</th>
            <th>Nama Negara</th>
            <th>Kode Telefon</th>
            <th>Mata Uang</th>
        </tr>
    @foreach ($nama as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->negaranya->nama?? null}}</td>
            <td>{{$item->negaranya->kode_telepon ?? null}}</td>
            <td>{{$item->negaranya->mata_uang ?? null}}</td>
        </tr>
    @endforeach
    </table>
</div>
@endsection