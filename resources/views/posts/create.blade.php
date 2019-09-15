@extends('layouts.app')


@section('content')

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <h1>Postar</h1>

           <form method="POST" class="form-group" enctype="multipart/form-data" action="/posts">

         

               @csrf

               <label for="descricao">Descrição:</label>
               <textarea type="text" class="form-control" name="description" rows="3" id="descricao"></textarea>

         

               <label for="filter">Filter:</label>
               <input type="text" class="form-control" name="filter" id="filter">

         
               <label for="arquivo" id="labelArquivo">Selecionar arquivo</label>
               <input type="file" class="form-control-file" name="image_path"><br>

         

               <button type="submit" class="col-md-12 btn btn-success">Postar</button>

           </form>

       </div>

   </div>

</div>

@endsection