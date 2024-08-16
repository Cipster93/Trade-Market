<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('style/home.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="mainHome">
  <form action="<?php echo e(route('search')); ?>" method="GET" class="search">
      <input type="search" name="query" placeholder="Search item" value="<?php echo e(request('query')); ?>">
      <button type="submit" class="btnSearch">Search</button>
  </form>

  <?php if($sellers->isEmpty()): ?>
      <p class="noItem">No results found for '<?php echo e(request('query')); ?>'.</p>
  <?php else: ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Profile</th>
            <th scope="col">Seller Name</th>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $__currentLoopData = $seller->products->unique('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <?php if($seller->profile == 'Male'): ?>
                  <img src="<?php echo e(asset('photo/mele.jpg')); ?>" class="mele" style="width: 50px;" height="50px">
                  <?php elseif($seller->profile == 'Female'): ?>
                  <img src="<?php echo e(asset('photo/female.jpg')); ?>" class="female" style="width: 50px;" height="50px">
                  <?php endif; ?>
                </td>
                <td><?php echo e($seller->seller_name); ?></td> 
                <td><?php echo e($product->product_name); ?></td>
                <td><?php echo e($product->pivot->price); ?> $</td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TradeMarket\resources\views/home.blade.php ENDPATH**/ ?>