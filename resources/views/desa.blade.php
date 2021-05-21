@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Desa</center></h1>
    @foreach ($nama as $item)
    <ul>
            <li>Nama Desa : {{$item->nama}}</li>
            <li>Nama Kota : {{$item->kotanya->nama?? null}}</li>
            <li>Luas : {{$item->luas ?? null}}</li>
    </ul>
    @endforeach
</div>
@endsection