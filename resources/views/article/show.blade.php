@extends('layouts.app2')
@section('title')
    CRUD Laravel 7
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center><h2> Tampilkan Artikel </h2></center>
            </div>
        </div>
    </div>
   
    <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Judul</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> {{ $article->judul }}</td>
              </tr>
      </table>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>  {{ $article->isi_article }}</td>
          </tr>
  </table>
        <center><a class="btn btn-primary" href="{{ route('article.index') }}"> Kembali</a></center>
@endsection