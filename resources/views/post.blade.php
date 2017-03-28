@extends('layouts.master')
@section('left-content')
<div class="blog-post">
  <h2 class="blog-post-title">{{$post['title']}}</h2>
  <p>{{$post['content']}}</p>
  <hr>
  <h3>Comments</h3>
  <form action="{{$post['id']}}/comment" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="comment">Your Comment</label>
    <textarea name="comment" class="form-control" id="comment" row="3"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
  </div>
  </form>

@include('layouts.errors')

  @foreach($post->comment as $row)
      <div class="alert alert-info">{{$row['comment']}}</div>
  @endforeach
</div>
@endsection
