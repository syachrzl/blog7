@section('title')
    Baca Data & Tampilkan
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <h1><center>Data Kota</center></h1>
    <ul><p>Nama Kota</p>
        @foreach ($nama as $item)
            <li>{{$item->nama}}</li>
        @endforeach
        
    </ul>
</div>
@endsection