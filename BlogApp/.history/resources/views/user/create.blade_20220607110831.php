@extends('layout.layout');
@section('content')

<form class="" method="post" action="/user/store">
    <div>
        <label for="">UserName</label>
        <input type="text">
    </div>
    <div>
        <label for="">Telephone</label>
        <input type="number">
    </div>
    <button class="btn btn-primary">Save</button>
    @csrf
</form>


@endsection

