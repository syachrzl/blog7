@extends('layouts.app') 
@section('title')
    CRUD Laravel 7
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center><h2>List Artikel</h2></center>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi Artikel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($article as $artikel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $artikel->judul }}</td>
            <td>{{ $artikel->isi_article }}</td>
            <td>
                <form action="{{ route('article.destroy',$artikel->id) }}" method="POST">
   
                    <a class="btn btn-secondary" href="{{ route('article.show',$artikel->id) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('article.edit',$artikel->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
       <center> <a class="btn btn-primary" href="{{ route('article.create') }}"> Input Data</a></center>
  
    {!! $article->links() !!}
      
@endsection