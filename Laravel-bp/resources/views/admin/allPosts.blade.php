@extends('admin.mainPanel')

@section('adminContent')


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      @if(session('status'))

      <h2 style="text-align: center; color:red">{{session('status')}}</h2>

      @endif

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


        @foreach($posts as $post)
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/posts_images/'.$post['image']) }}" alt="">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>


            <div class="card-body">
              <p class="card-text">{{ $post['text'] }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a onclick="return confirm('Are you sure you want to delete this post?')" href="{{ route('deletePost', ['id'=>$post['id']]) }}" type="button" class="btn btn-sm btn-outline-danger me-1">Delete</a>
                  <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- end row -->
      </div>
    </div>
  </div>

</main>

@endsection