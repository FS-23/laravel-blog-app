@extends('layout.layout');
@section('content')

<form method="post" action="/user/store">
    <div>
        <label for="">UserName</label>
        <input name="userName" type="text">
    </div>
    <div>
        <label for="">Telephone</label>
        <input name="phoneNumber" type="number">
    </div>
    <button class="btn btn-primary">Save</button>
    @csrf
</form>


@endsection

