@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Kota</center></h1>
    @foreach ($nama as $item)
    <ul>
            <li>Nama Kota : {{$item->nama}}</li>
            <li>Kode Telefon : {{$item->kode_telepon ?? null}}</li>
            <li>Mata Uang : {{$item->mata_uang ?? null}}</li>
    </ul>
    <a class="btn btn-secondary" href="tambahnegara">Tambah Informasi Negara</a>
    @endforeach
</div>
@endsection