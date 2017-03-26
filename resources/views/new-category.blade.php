@extends('layouts.master')

@section('title','Blog - New Category')

@section('left-content')
<h3>Add New Category</h3>
<hr>
<form action="store-category" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Your New Category Name" class="form-control">
  </div>
  <div class="form-group">
    <label for="active"><input type="radio" id="active" name="status" value="1" @if(old('status')==1) checked @endif> Active</label>
    <label for="deactive"><input type="radio" id="deactive" name="status" value="0" @if(old('status')==0) checked @endif> Deactive</label>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-md">Save</button>
  </div>
</form>
@include('layouts.errors')
@endsection
