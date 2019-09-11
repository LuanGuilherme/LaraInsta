<?php $__env->startSection('content'); ?>

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-8">

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card mt-4">

          <img class="card-img-top" src="<?php echo e($post->image_path); ?>" alt="Card image cap">
          <div class="row">
            <div class="card-body col-md-10"><?php echo e($post->description); ?></div>
            <div class="col-md-2">
              <a href=""><i class="fas fa-thumbs-up"></i></a>
              <div><?php echo e($post->likes); ?></div>
            </div>
          </div>

        </div>   

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laraInsta\resources\views/posts/list.blade.php ENDPATH**/ ?>