<?php if($message = Session::get('success')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '<?php echo e($message); ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php elseif($errors->any()): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Kesalahan',
            text: '<?php echo e($errors->first()); ?>',
            showConfirmButton: false,
            timer: 4000
        })
    </script>
<?php elseif($message = Session::get('error')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '<?php echo e($message); ?>',
            showConfirmButton: false,
            timer: 4500
        })
    </script>
<?php endif; ?>
<?php /**PATH D:\Compressed\ppdb-main\ppdb-main\resources\views/includes/alert.blade.php ENDPATH**/ ?>