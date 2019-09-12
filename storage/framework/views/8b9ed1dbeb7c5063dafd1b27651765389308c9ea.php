  


  <?php $__env->startSection('content'); ?>

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-8">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card mt-4">

          <img class="card-img-top" src="<?php echo e($post->image_path); ?>" alt="Card image cap">

          <div class="card-body row col-md-12"><?php echo e($post->description); ?>


            <div class="col-md-offset-8">

              <form method="POST" enctype="multipart/form-data" action="/posts/addLike">


                <?php echo csrf_field(); ?>

                <input type="hidden" value="<?php echo e($post->id); ?>" name="id"></input>
                <button type="submit">Curtir</button>


              </form>



              <form method="POST" action="/posts/removeLike">


                <?php echo csrf_field(); ?>


                <button type="submit">Descurtir</button>
                <input type="hidden" value="<?php echo e($post->id); ?>" name="id"></input>

              </form>

              <div><?php echo e($post->likes); ?></div>

            </div>

            <div class="row">

             <form method="POST" action="/posts/coment">


                  <?php echo csrf_field(); ?>


                  <input type="text" name="coment" placeholder="Comente..."></input>
                  <input type="hidden" value="<?php echo e($post->id); ?>" name="id"></input>

              </form>
            </div>

          </div>

          <div class="row"><?php echo e($post->coments); ?></div>

        </div>

      </div>   

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larainsta\resources\views/posts/list.blade.php ENDPATH**/ ?>