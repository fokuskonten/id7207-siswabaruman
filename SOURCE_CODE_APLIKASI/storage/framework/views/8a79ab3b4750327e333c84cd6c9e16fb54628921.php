<!DOCTYPE html>
<html lang="en">
    <head>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="HubSpot">

        <meta name="author" content="FokusKonten">>
        <meta name="description" content="Aplikasi voting berbasis web, mempermudah pengelola untuk melakukan pemilihan umum (voting) secara custom, realtime, akurat dan terstruktur">
        <meta name="robots" content="noindex,nofollow">

        <link rel="kanonik" href="" >
        <title>
            <?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?>

        </title>
        <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <div class="main-wrapper">
            <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-wrapper">
                <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\Compressed\ppdb-main\ppdb-main\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>