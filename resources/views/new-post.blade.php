@extends('layouts.master')

@section('title','Blog - New Post')

@section('left-content')
  <h3>Add New Blog Post</h3>
  <hr>
  <form action="store-post" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}" placeholder="Your Post Title">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" id="content" rows="8" class="form-control" placeholder="Your Post Content">{{old('content')}}</textarea>
    </div>
    <div class="form-group">
      <label for="publish"><input type="radio" id="publish" name="status" value="1" @if(old('status')==1) checked @endif> Publish</label>
      <label for="unpublish"><input type="radio" id="unpublish" name="status" value="0" @if(old('status')==0) checked @endif> Unpublish</label>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-md">Save</button>
    </div>
  </form>
  @include('layouts.errors')
@endsection
