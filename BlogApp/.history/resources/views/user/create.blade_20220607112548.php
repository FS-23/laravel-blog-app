@extends('layout.layout');
@section('content')

<form method="post" action="/user/store">
    <div class="mb-3" style="width:200px">
        <label for="exampleInputUser" class="form-label">User Name</label>
        <input type="text" class="form-control" placeholder="UserName">
      </div>
      <div class="mb-3" style="width:200px">
        <label for="exampleInputNumber" class="form-label">Numero De Telephone</label>
        <input type="number" class="form-control" placeholder="PhoneNumber">
      </div>
    <button class="btn btn-primary">Save</button>
    @csrf
</form>


@endsection

