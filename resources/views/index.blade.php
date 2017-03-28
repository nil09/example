@extends('layouts.master')
@section('title','Welcome')

@section('left-content')
<h3>All Latest Post</h3>
<hr>

@foreach($post as $row)
<div class="blog-post">
  <a href="post/{{$row['id']}}"><h2 class="blog-post-title">{{$row['title']}}</h2></a>
  <p>{{$row['content']}}</p>
</div>
@endforeach

@endsection
