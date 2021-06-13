@extends('layouts.app2')
@section('title')
    CRUD Laravel 7
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <center><h2>Tambah Negara</h2></center>
        </div>
    </div>
</div>  

<form action="{{url("negarapage")}}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Negara:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Isi Nama Negara">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>English Name:</strong>
                <input type="text" name="nama_inggris" class="form-control" placeholder="Input English Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mata Uang:</strong>
                <input type="text" name="mata_uang" class="form-control" placeholder="Isi Mata Uang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Telepon:</strong>
                <input type="text" name="kode_telepon" class="form-control" placeholder="Isi Kode Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="btn">
                <button type="submit" class="btn btn-success">Simpan</button> 
                <button type="reset" class="btn btn-danger">Reset</button>
             </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('negarapage')}}"> Kembali</a>
            </div>
        </div>
    </div>
</form>
@endsection