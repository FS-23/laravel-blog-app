@extends('layout.layout');
@section('content')

<form method="post" action="/user/store">
    <div class="w-50 m-auto mt-5 shadow-lg p-3">
    <div class="mb-3">
        <label for="exampleInputUser" class="form-label">User Name</label>
        <input type="text" class="form-control" placeholder="UserName">
      </div>
      <div class="mb-3" style="width:200px">
        <label for="exampleInputNumber" class="form-label">Numero De Telephone</label>
        <input type="number" class="form-control" placeholder="PhoneNumber">
      </div>
    <button class="btn btn-primary">Save</button>
</div>
    @csrf
</form>


@endsection

