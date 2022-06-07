
@extends('layout.layout')
@section('content')
    <div class="col-7 mt-5 m-auto shadow-sm p-3">
        
           <div>
               <strong class="h4">{{ $blog->title }} [{{ $blog ->categorie }}]</strong>
               <a class="btn btn-outline-secondary float-end" href="/blog/list">List</a>
           </div>
           <div class="mt-3">
               {{ $blog->content }}
           </div>
    </div>
@endsection