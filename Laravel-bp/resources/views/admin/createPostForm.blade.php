@extends('admin.mainPanel')

@section('adminContent')


<div class="main-content pt-3">

    <h2 style="text-align:center">Create a New Post</h2>

    <p style="text-align:center">You create a new post by filling out this form</p>

    @if(session('status'))

    <h2 style="text-align: center; color:red">{{session('status')}}</h2>

    @endif

    @if($errors->any())

    @foreach($errors->all() as $error)
    <div style="text-align: center; color:red;">{{$error}}</div>
    @endforeach

    @endif


    <form action="{{ route('submitPostForm') }}" method="post" enctype="multipart/form-data" class="container">
        @csrf

        <div class="form-group">
            <label>Post Title</label>
            <input type="text" class="form-control" id="post-title" name="post_title" placeholder="Please enter post title">
        </div>

        <div class="form-group py-3">
            <label>Post Text</label>
            <input type="text" class="form-control" name="post_text" placeholder="Please enter post text">
        </div>

        <div class="form-group">
            <label>Post Image</label>
            <input type="file" class="form-control" id="post-image" name="post_image">
        </div>

        <div class="form-group pt-3">
            <div class="d-grid gap-2">
                <input type="submit" value="Submit" class="btn btn-primary btn-lg" id="post-submit-btn">
                </div>
        </div>

    </form>

</div>

@endsection