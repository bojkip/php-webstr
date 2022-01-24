@extends('main')

@section('content')

<div class="main-content">

  @foreach($posts as $post)
  <div class="single-post">
    <div class="post-text">
      <h2> {{$post->title}} </h2>
      <p> {{$post->text}} </p>
    </div>

    <div class="post-img">
      <img width="250" height="250" src="{{ asset('storage/posts_images/'.$post->image) }}">
    </div>


  </div>
  @endforeach



</div>

@endsection