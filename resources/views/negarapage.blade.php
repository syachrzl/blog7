@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Negara</center></h1>
    @foreach ($nama as $item)
    <ul>
            <li>Nama Negara : {{$item->nama}}</li>
            <li>English Name: {{$item->nama_inggris}}</li>
            <li>Kode Telefon : {{$item->kode_telepon ?? null}}</li>
            <li>Mata Uang : {{$item->mata_uang ?? null}}</li>
    </ul>
    <a class="btn btn-secondary" href="negarapage/tambah">Tambah Informasi Negara</a>
    @endforeach
</div>
@endsection