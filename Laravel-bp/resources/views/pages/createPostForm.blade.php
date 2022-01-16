@extends('main')

@section('content')


<div class="main-content">

  <h2 style="text-align:center">Create a New Post</h2>

  <p style="text-align:center">You create a new post by filling out this form</p>

  <form action="" method="post" enctype="multipart/form-data">

    <div class="input-block">
      <label>Post Title</label>
      <input type="text" id="post-title" name="post-title" placeholder="Please enter post title">
    </div>

    <div class="input-block">
    <label>Post Text</label>
      <input type="text" id="post-text" name="post-text" placeholder="Please enter post text">
    </div>

    <div class="input-block">
    <label>Post Image</label>
      <input type="file" id="post-image" name="post-image">
    </div>

    <div class="input-block">
      <input type="submit" value="Submit" id="post-submit-btn">
    </div>

  </form>

</div>

@endsection