<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $("#form_login").submit(function(){
        document.getElementById('submit_button').disabled = true;
        $('#spinner').attr("style", "display:block");
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                    <div class="row w-100 mx-0 auth-page">
                        <div class="col-md-8 col-xl-6 mx-auto">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-5 pr-md-0">
                                        <div class="auth-left-wrapper" style="border-radius: 0.75rem;"></div>
                                    </div>
                                    <div class="col-md-7 pl-md-0">
                                        <div class="auth-form-wrapper px-4 py-4">
                                            <a href="#" class="noble-ui-logo d-block mb-2">Admin PPDB <span style="text-green">Masuk</span></a>
                                            <h5 class="text-muted font-weight-normal mb-4">Selamat datang di sistem pengelolaan Peserta Didik Baru MAN 1 Hulu Sungai Tengah</h5>
                                            <form class="forms-sample" id="form_login" method="POST" action="<?php echo e(route('login')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" class="form-control" id="Password" name="password" autocomplete="current-password" placeholder="Password" required>
                                                </div>
                                                <div class="mt-4 d-flex">
                                                    <button type="submit" id="submit_button"  class="btn btn-warning mr-2 mb-2 mb-md-0 text-white">
                                                        Masuk
                                                    </button>
                                                    <div class="spinner-border text-warning mt-2" id="spinner" role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </div>
                                            </form>
<div class="text-center" style="margin-top: 15px; font-size: 12px; color: #64748b; font-family: sans-serif;">Powered by <a href="https://fokuskonten.my.id" target="_blank" style="color: #2563eb; font-weight: 600; text-decoration: none;">FokusKonten</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper" style="border-radius: 0.75rem;"></div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">Admin PPDB <span style="text-green">Masuk</span></a>
                                            <h5 class="text-muted font-weight-normal mb-4">Selamat datang admin <?php echo e(Auth::user()->name); ?>!</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <a  href="<?php echo e(route('logout')); ?>"
                                                    class="btn btn-inverse-danger btn-icon btn-icon-only mr-2 mb-2 mb-md-0 text-white"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i data-feather="log-out" stroke-width="3" width="14" style="margin-top:7px !important"  height="14"></i>
                                                </a>
                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                            <div class="col-10 col-lg-10 col-md-10">
                                                <a href="<?php echo e(route('home')); ?>" class="btn btn-warning w-auto mr-2 mb-2 mb-md-0 text-white">
                                                    Kembali ke beranda
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.loginRegister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FokusKonten-Server\App_Web\ID7207-SiswaBaruMAN\SOURCE_CODE_APLIKASI\resources\views/auth/login.blade.php ENDPATH**/ ?>