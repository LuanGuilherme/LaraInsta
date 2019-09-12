  @extends('layouts.app')


  @section('content')

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-8">

        @foreach ($posts as $post)

        <div class="card mt-4">

          <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">

          <div class="card-body row col-md-12">{{$post->description}}

            <div class="col-md-offset-8">

              <form method="POST" enctype="multipart/form-data" action="/posts/addLike">


                @csrf

                <input type="hidden" value="{{$post->id}}" name="id"></input>
                <button type="submit">Curtir</button>


              </form>



              <form method="POST" action="/posts/removeLike">


                @csrf


                <button type="submit">Descurtir</button>
                <input type="hidden" value="{{$post->id}}" name="id"></input>

              </form>

              <div>{{$post->likes}}</div>

            </div>

            <div class="row">

             <form method="POST" action="/posts/coment">


                  @csrf


                  <input type="text" name="coment" placeholder="Comente..."></input>
                  <input type="hidden" value="{{$post->id}}" name="id"></input>

              </form>
            </div>

          </div>

          <div class="row">{{$post->coments}}</div>

        </div>

      </div>   

      @endforeach

    </div>

  </div>

</div>

@endsection