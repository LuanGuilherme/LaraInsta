@extends('layouts.app')


@section('content')

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-8">

      @foreach ($posts as $post)

        <div class="card mt-4">

          <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">
          <div class="row">
            <div class="card-body">{{$post->description}}</div>
            <i class="fas fa-thumbs-up"></i>
          </div>

        </div>   

      @endforeach

    </div>

  </div>

</div>

@endsection