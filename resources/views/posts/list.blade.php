@extends('layouts.app')


@section('content')

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-8">

      @foreach ($posts as $post)

        <div class="card mt-4">

          <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">

          <div class="card-body col-md-12">

            <div class="row"> 

              {{$post->description}}

              <div class="offset-md-8 form-inline">

                <form method="POST" enctype="multipart/form-data" action="/posts/addLike">

                  @csrf

                  <input type="hidden" value="{{$post->id}}" name="id"></input>
                  <button class="btn btn-primary"><i class="far fa-thumbs-up"></i> Like</button>

                </form>

                <form method="POST" action="/posts/removeLike/{{$post->likes}}">

                  @csrf

                  <input type="hidden" value="{{$post->id}}" name="id"></input>
                  <button class="btn btn-danger"><i class="far fa-thumbs-down"></i> Dislike</button>

                </form>

                <div id="likes" class="col-md-2">{{$post->likes}}</div>

              </div>

            </div>

            <div class="row" style="margin-top: 2%">

              <form method="POST" class="col-md-12" action="/posts/coment/{{$post->coments}}">

                @csrf

                <input type="text" class="col-md-12" name="coment" placeholder="Comente..."></input>
                <input type="hidden" value="{{$post->id}}" name="id"></input>

              </form>

            </div>

          </div>

          <div class="col-md-12"><p>{!!$post->coments!!}</p></div>

        </div>   

      @endforeach

    </div>

  </div>

</div>

@endsection