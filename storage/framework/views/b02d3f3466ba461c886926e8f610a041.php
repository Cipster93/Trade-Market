


<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('style/create.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="creapte-page">
    <form action="<?php echo e(route('store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        Item Name: <br>
        <input type="text" name="product_name"> <br>

        Set Price: <br>
        <input type="number" name="price" step="0.01" min="0.01"> <br><br>

        <button type="submit" class="btn btn-success">Sell Item</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TradeMarket\resources\views/create.blade.php ENDPATH**/ ?>