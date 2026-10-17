<?php $__env->startSection('title'); ?>
Jadwal
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row px-2 br-1 py-1 mb-5" style="background: rgb(230, 230, 230)">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-black breadcump-black" href="/">Beranda</a></li>
                <li class="breadcrumb-item active font-weight-bold text-green" aria-current="page">Jadwal Pendaftaran</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 text-center font-weight-bold h4 mb-3">Jadwal Pendaftaran</div>
        <div class="col-12 mb-3">
            <hr class="" style="width: 100px">
        </div>
        <div class="col-12 col-lg-9 col-md-9 mb-3">
            <div class="col-12 mb-1">
                <img src="<?php echo e(asset('assets/uploads/landing/'.$data->file)); ?>" width="100%" alt="">
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3">
            <?php echo $__env->make('includes.sidebar_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FokusKonten-Server\App_Web\ID7207-SiswaBaruMAN\SOURCE_CODE_APLIKASI\resources\views/user/jadwal.blade.php ENDPATH**/ ?>