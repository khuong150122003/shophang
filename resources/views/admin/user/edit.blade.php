@extends('layout_admin')

@section('content')
<h2>Edit user</h2>
<form action="/admin/update/user/{{ $user[0]->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
  {{ csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Name (*):</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" value="{{ $user[0]->name }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name(*)</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" required value="{{ $user[0]->name }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email" required value="{{ $user[0]->email }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Password">Password:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="password" value="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save user</button>
    </div>
   </div>
</form>
@stop
