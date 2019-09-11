<?php $__env->startSection('content'); ?>

<div class="container">

    <?php echo $__env->make('forms.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laraInsta\resources\views/auth/login.blade.php ENDPATH**/ ?>