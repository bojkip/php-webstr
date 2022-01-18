@extends('main')

@section('content')


<div class="main-content">

<h2 style="text-align:center">Create a New Post</h2>

<p style="text-align:center">You create a new post by filling out this form</p>

@if(session('status'))

<h2 style="text-align: center; color:pink">{{session('status')}}</h2>

@endif

@if($errors->any())

@foreach($errors->all() as $error)
<div style="text-align: center; color:pink;">{{$error}}</div>
@endforeach

@endif


<form action="{{ route('submitPostForm') }}" method="post" enctype="multipart/form-data">
@csrf

<div class="input-block">
    <label>Post Title</label>
    <input type="text" id="post-title" name="post_title" placeholder="Please enter post title">
</div>

<div class="input-block">
<label>Post Text</label>
    <input type="text" id="post-text" name="post_text" placeholder="Please enter post text">
</div>

<div class="input-block">
<label>Post Image</label>
    <input type="file" id="post-image" name="post_image">
</div>

<div class="input-block">
    <input type="submit" value="Submit" id="post-submit-btn">
</div>

</form>

</div>

@endsection
