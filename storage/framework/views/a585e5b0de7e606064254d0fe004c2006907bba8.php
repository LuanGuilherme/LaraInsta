<?php $__env->startSection('content'); ?>

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <h1>Postar</h1>

           <form method="POST" class="form-group" enctype="multipart/form-data" action="/posts">

         

               <?php echo csrf_field(); ?>

               <label for="descricao">Descrição:</label>
               <textarea type="text" class="form-control" name="description" rows="3" id="descricao"></textarea>

         

               <label for="filter">Filter:</label>
               <input type="text" class="form-control" name="filter" id="filter">

         
               <label for="arquivo" id="labelArquivo">Selecionar arquivo</label>
               <input type="file" class="form-control-file" name="image_path"><br>

         

               <button type="submit" class="btn btn-success form-control">Postar</button>

           </form>

       </div>

   </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laraInsta\resources\views/posts/create.blade.php ENDPATH**/ ?>