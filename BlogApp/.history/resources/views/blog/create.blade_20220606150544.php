@extends('layout.layout')

@section('content')
   <div class="w-50 m-auto mt-5 shadow-lg p-3">
    <form action="/blog/store" method="post">
        <h3>New blog</h3>
        <div class="form-group">
            <label class="form-label"  for="">Title</label>
            <input  class="form-control" placeholder="Title" type="text">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Content</label>
            <input class="form-control" placeholder="Content" type="text">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Categorie</label>
           <select class="form-select" name="" id="">
               <option value="html">Html</option>
               <option value="css">Css</option>
               <option value="js">Js</option>
               <option value="react">React</option>
               <option value="laravel">Laravel</option>
           </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-warning">Save</button>
            <a href="/blog/list"  class="btn btn-danger ms-3">cancel</a>
        </div>
    </form>
   </div>
@endsection