<?php echo $__env->make('includes.alertaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('/assets/vendors/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/vendors/core/core.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/template.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
<script src="<?php echo e(asset('/assets/vendors/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/select2.js')); ?>"></script>

<script>
    $(document).ready(function() {$('.select2-single').select2();});
</script>




<?php /**PATH D:\Compressed\ppdb-main\ppdb-main\resources\views/includes/script.blade.php ENDPATH**/ ?>