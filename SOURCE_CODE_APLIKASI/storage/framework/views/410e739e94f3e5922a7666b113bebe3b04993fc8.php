<!DOCTYPE html>
<html lang="en">
    <head>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>

        <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <style>
            @media  screen and (max-width: 768px) {
                .main-wrapper .page-wrapper {
                    background: #be7723;
                    width: 100%;
                    height: 100%;
                    background-image: url("../../../assets/images/login-banner-2.jpg");
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                }
                .card{
                    background-color: rgba(255, 255, 255, 0.651) !important;
                    backdrop-filter: blur(10px);
                    -webkit-backdrop-filter: blur(10px);
                    border: transparent;
                    padding-left: 10%;
                    padding-right: 10%;
                }
            }
            .spinner-border {
                width: 16px !important;
                height: 16px !important;
                margin-bottom: 2px !important;
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="main-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\Compressed\ppdb-main\ppdb-main\resources\views/layouts/loginRegister.blade.php ENDPATH**/ ?>