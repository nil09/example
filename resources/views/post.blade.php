@extends('layouts.master')
@section('left-content')
<div class="blog-post">
  <h2 class="blog-post-title">{{$post['title']}}</h2>
  <p>{{$post['content']}}</p>
  @foreach($post->comment as $row)
      {{$row['comment']}}<br>
  @endforeach
</div>
@endsection
