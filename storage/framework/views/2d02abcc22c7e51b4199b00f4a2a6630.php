

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('style/login.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="containerLogin">
    <h1 class="loginHeader">Login to account</h1>
    <form action="<?php echo e(route('loginToPage')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        Password: <br>
        <input type="password" name="password" placeholder="Name"> <br>

        Email: <br>
        <input type="email" name="email" placeholder="Email"> <br> <br>

        <button type="submit" class="btn btn-success">Login</button> <br> <br>

        <p>Don't have an account? Register here <a href="<?php echo e(route('register.page')); ?>">Register</a></p>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TradeMarket\resources\views/login.blade.php ENDPATH**/ ?>