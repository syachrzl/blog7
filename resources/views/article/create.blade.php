@extends('layouts.app2')
@section('title')
    CRUD Laravel 7
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <center><h2>Tambah Artikel</h2></center>
        </div>
    </div>
</div>  
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('article.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Artikel:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Isi Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi Artikel:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Isi Artikel"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="btn">
                <button type="submit" class="btn btn-success">Simpan</button> 
                <button type="reset" class="btn btn-danger">Hapus</button>
             </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
</form>
@endsection