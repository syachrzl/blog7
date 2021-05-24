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
            <li>Nama Negara : {{$item->negaranya->nama?? null}}</li>
            <li>Kode Telefon : {{$item->negaranya->kode_telepon ?? null}}</li>
            <li>Mata Uang : {{$item->negaranya->mata_uang ?? null}}</li>
    </ul>
    @endforeach
</div>
@endsection