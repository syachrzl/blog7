@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Desa</center></h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama Desa</th>
            <th>Nama Kota</th>
            <th>Luas M2</th>
        </tr>
    @foreach ($nama as $item)
    <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->kotanya->nama?? null}}</td>
            <td>{{$item->luas ?? null}}</td>
    </tr>
    @endforeach
</div>
@endsection