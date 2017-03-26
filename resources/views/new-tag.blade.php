@extends('layouts.master')
@section('title','Blog - New Tag')

@section('left-content')
<h3>Add New Tag</h3>
<hr>
<form action="store-tag" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Tag Name</label>
    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="active"><input type="radio" name="status" id="active" value="1" @if(old('status')==1) checked @endif> Active</label>
    <label for="deactive"><input type="radio" name="status" id="deactive" value="0" @if(old('status')==0) checked @endif> Deactive</label>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary btn-md">Save</button>
  </div>
</form>
@include('layouts.errors')
@endsection
