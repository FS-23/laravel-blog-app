
@extends('layout.layout')
@section('content')
    <div class="col-7 mt-5 m-auto shadow-sm p-3">
        
           <div class="d-flex justify-content-between">
               <div>
                   <strong class="h4">{{ $blog->title }} [{{ $blog ->categorie }}]</strong>
               </div>
               
               <div>
                   <a class="btn btn-outline-secondary " href="/blog/list">List</a>
                   <a class="btn btn-outline-danger" href="/blog/delete/{{ $blog->id }}">Supprimer</a>
               </div>
           </div>
           <div class="mt-3">
               {{ $blog->content }}
           </div>
    </div>
@endsection