


<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('style/register.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="containerRegister">
    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        Name: <br>
        <input type="text" name="name" placeholder="Name"> <br>

        Email: <br>
        <input type="email" name="email" placeholder="Email"> <br>

        Password: <br>
        <input type="password" name="password" placeholder="Password"> <br>

        Gender: <br>
        <input type="radio" id="html" name="gender" value="Male" required> Mele
        <input type="radio" id="html" name="gender" value="Female" required> Female  <br><br>

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TradeMarket\resources\views/register.blade.php ENDPATH**/ ?>