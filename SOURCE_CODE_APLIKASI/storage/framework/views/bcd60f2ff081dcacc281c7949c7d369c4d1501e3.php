<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    table,td,tr,th,tbody,thead{
        font-size: 10px !important;
    }
    td,th{
        padding-top:5px !important;
        padding-bottom:5px !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const jurusan = new Chart(
            document.getElementById('jurusan'),{
            type: 'doughnut',
            data: {
            datasets: [{
                    label: 'Data Calon Peserta Berdasarkan Jurusan',
                    data: [<?php echo $chart['agama'] ?>, <?php echo $chart['mipa'] ?>, <?php echo $chart['ips'] ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                }],
                labels: [
                    'Agama',
                    'MIPA',
                    'IPS'
                ]
            },
            options: {
                title: {
                    display: true,
                    text: "Data Calon Peserta Berdasarkan Jurusan"
                }
            }
        });
        const jalur = new Chart(
            document.getElementById('jalur'),{
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'Data Calon Peserta Berdasarkan Jalur',
                        data: [<?php echo $chart['undangan'] ?>, <?php echo $chart['regular'] ?>],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                        ],
                    }],
                    labels: [
                        'Undangan',
                        'Regular',
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: "Data Calon Peserta Berdasarkan Jalur"
                    }
                }
            });
        const calon = new Chart(
            document.getElementById('calon'),{
                type: 'bar',
                data: {
                    datasets: [{
                        label: 'Jumlah peserta',
                        data: <?php echo json_encode($data['pendaftar']) ?>,
                        backgroundColor: [
                            'rgb(255, 205, 86)'
                        ],
                    }],
                    labels: <?php echo json_encode($data['hari']) ?>
                },
                options: {
                    title: {
                        display: true,
                        text: "Progres Harian PPDB"
                    }
                }
            });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 mb-3">
    <h5>Data Statistik PPDB</h5>
</div>
<div class="row mb-2">
    <div class="col-12 col-lg-5 col-md-5 order-2 order-lg-1 order-md-1">
        <div class="row">
            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-lg-6 col-md-6 mb-2">
                                <p class="mb-3">Data Calon Peserta Berdasarkan Jurusan</p>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Variabel</td>
                                            <td>Jumlah</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Agama</td>
                                            <td><?php echo e($chart['agama']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>MIPA</td>
                                            <td><?php echo e($chart['mipa']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>IPS</td>
                                            <td><?php echo e($chart['ips']); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-5 col-lg-6 col-md-6 mb-2">
                                <canvas id="jurusan"  style="width:200px !important;height:200px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-lg-6 col-md-6 mb-2">
                                <p class="mb-3">Data Calon Peserta Berdasarkan Jalur</p>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Variabel</td>
                                            <td>Jumlah</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Undangan</td>
                                            <td><?php echo e($chart['undangan']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Regular</td>
                                            <td><?php echo e($chart['regular']); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-5 col-lg-6 col-md-6">
                                <canvas id="jalur"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7 col-md-7 order-1 order-lg-2 order-md-2">
        <div class="row">
            <div class="col-4 col-lg-4 col-md-4">
                <div class="alert alert-primary" role="alert" style="font-size: 12px !important;text-align:center">
                    Total Pendaftar: <br> <b style="font-size: 20px !important"><?php echo e($chart['total_pendaftar']); ?> Calon</b>
                </div>
            </div>
            <div class="col-4 col-lg-4 col-md-4">
                <div class="alert alert-success" role="alert" style="font-size: 12px !important;text-align:center">
                    Lulus: <br> <b style="font-size: 20px !important"><a href="<?php echo e(route('peserta_lolos')); ?>" class="alert-link"><?php echo e($chart['lulus']); ?></a> Peserta</b>
                </div>
            </div>
            <div class="col-4 col-lg-4 col-md-4">
                <div class="alert alert-danger" role="alert" style="font-size: 12px !important;text-align:center">
                    Ditolak: <br> <b style="font-size: 20px !important"><a href="<?php echo e(route('peserta_reject')); ?>" class="alert-link"><?php echo e($chart['tidak_lulus']); ?></a> Peserta</b>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <p class="mb-3">Jumlah Peserta Pendaftar harian (<?php echo e(date('M').'/'.date('Y')); ?>)</p>
                <canvas id="calon"></canvas>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Compressed\ppdb-main\ppdb-main\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>