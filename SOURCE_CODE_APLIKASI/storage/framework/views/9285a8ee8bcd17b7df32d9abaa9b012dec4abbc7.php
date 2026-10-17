<?php $__env->startSection('title'); ?>
Biaya
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    table,td,tr,th{
        vertical-align: top !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row px-2 br-1 py-1 mb-5" style="background: rgb(230, 230, 230)">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none text-black breadcump-black" href="/">Beranda</a></li>
                <li class="breadcrumb-item active font-weight-bold text-green" aria-current="page">Biaya Pendaftaran</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 text-center font-weight-bold h4 mb-3">Biaya Pendaftaran</div>
        <div class="col-12 mb-3">
            <hr class="" style="width: 100px">
        </div>
        <div class="col-12 col-lg-9 col-md-9 mb-3">
            <div class="col-12 mb-1">
                <?php $__currentLoopData = $data['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="mb-4">
                        <tbody>
                            <?php
                                $Biaya = \App\Models\Biaya::where('id_category',$category->id)->orderBy('id', 'ASC')->get();
                                $total = \App\Models\Biaya::where('id_category',$category->id)->sum('total');
                            ?>
                            <?php if(count($Biaya) != 0): ?>
                                <tr class="font-weight-bold" style="font-size:20px;height:40px">
                                    <td style="width:30px !important"><?php echo e(++$index); ?>.</td>
                                    <td colspan="3"><?php echo e($category->name); ?> (Total : <?php echo e("Rp. " . number_format($total, 0, ".", ".")); ?>)</td>
                                </tr>
                                <?php $__currentLoopData = $Biaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number => $biaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="font-size:15px;">
                                        <td style="height:30px"></td>
                                        <td style="border-bottom:1px solid rgba(0, 0, 0, 0.116) ;width:30px !important"><?php echo e(++$number); ?>. </td>
                                        <td style="border-bottom:1px solid rgba(0, 0, 0, 0.116) ;width: 500px"><?php echo e($biaya->name); ?></td>
                                        <td style="border-bottom:1px solid rgba(0, 0, 0, 0.116);text-align:right"><?php echo e("Rp. " . number_format($biaya->total, 0, ".", ".")); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br><br>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3">
            <?php echo $__env->make('includes.sidebar_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FokusKonten-Server\App_Web\ID7207-SiswaBaruMAN\SOURCE_CODE_APLIKASI\resources\views/user/biaya.blade.php ENDPATH**/ ?>