<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('style/app.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <title>Trade Market</title>
</head>
<body>
    <div class="header-container">
        <div class="header">
        <a href="<?php echo e(route('home')); ?>">
            <h1>Trade Market</h1>
        </div>
        <div class="nav">
            <nav class="nav-bar">
                <a href="<?php echo e(route('create.page')); ?>">
                    <img src="<?php echo e(asset('photo/sale.jpg')); ?>" alt="Add" class="img">
                </a>
            </nav>
        </div>
        <div class="auth">
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login.page')); ?>" class="btn btn-primary btnLogin">Login</a>
                <a href="<?php echo e(route('register.page')); ?>" class="btn btn-primary btnRegister">Register</a>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
                <span class="user-name">Welcome, <?php echo e(Auth::user()->seller_name); ?></span>
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-primary btnLogout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\TradeMarket\resources\views/layouts/app.blade.php ENDPATH**/ ?>