
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<style type="text/css">
	.fotouser{
	    object-fit: cover;
	    width: 3rem;
	    height: 3rem;
	}
	.c-primary{
	    color: #7571f9;
	}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo e(url('/laporan_pegawai')); ?>">Laporan Pegawai</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-body">
                	<div class="row">
		                <div class="col-3">
		                    <div class="card card-widget">
		                        <div class="card-body gradient-8">
		                            <div class="media">
		                                <div class="media-body">
		                                    <h2 class="card-widget__title">Baru</h2>
		                                    <h5 class="card-widget__subtitle">Jumlah: <?php echo e($baru); ?></h5>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-3">
		                    <div class="card card-widget">
		                        <div class="card-body gradient-8">
		                            <div class="media">
		                                <div class="media-body">
		                                    <h2 class="card-widget__title">Proses</h2>
		                                    <h5 class="card-widget__subtitle">Jumlah: <?php echo e($proses); ?></h5>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-3">
		                    <div class="card card-widget">
		                        <div class="card-body gradient-8">
		                            <div class="media">
		                                <div class="media-body">
		                                    <h2 class="card-widget__title">Selesai</h2>
		                                    <h5 class="card-widget__subtitle">Jumlah: <?php echo e($selesai); ?></h5>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-3">
		                    <div class="card card-widget">
		                        <div class="card-body gradient-8">
		                            <div class="media">
		                                <div class="media-body">
		                                    <h2 class="card-widget__title">Diambil</h2>
		                                    <h5 class="card-widget__subtitle">Jumlah: <?php echo e($diambil); ?></h5>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<h4 class="card-title">Daftar Pegawai</h4>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<div class="table-responsive">
		                        <table class="table table-bordered zero-configuration">
		                            <thead style="text-align: center;">
		                                <tr class="thead">
		                                    <th>No</th>
		                                    <th>Nama</th>
		                                    <th>Kode Pengguna</th>
		                                    <th>Posisi</th>
		                                    <th>Username</th>
		                                    <th>Aksi</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <?php $number = 1 ?>
		                            	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                <?php if($user->role == 'admin' || $user->role == 'kasir'): ?>
		                                <tr>
		                                    <th class="align-middle text-center"><?php echo e($number); ?></th>
		                                    <th><img src="<?php echo e(asset('/pictures/'.$user->avatar)); ?>" class="rounded-circle mr-3 fotouser" alt=""><?php echo e($user->name); ?></th>
		                                    <td class="text-center"><?php echo e($user->kd_pengguna); ?></td>
		                                    <td>
	                                        <?php if($user->role == 'admin'): ?>
	                                        <i class="fa fa-circle-o text-success mr-2"></i>
	                                        <?php else: ?>
	                                        <i class="fa fa-circle-o text-primary mr-2"></i>
	                                        <?php endif; ?>
	                                        &nbsp;<?php echo e($user->role); ?></td>
		                                    <td><?php echo e($user->username); ?></td>
		                                    <td style="text-align: center;"><a href="<?php echo e(url('/laporan_pegawai_riwayat/'.$user->id)); ?>" class="btn btn-primary font-weight-bold btn-sm">Lihat</a></td>
		                                </tr>
		                                <?php $number++ ?>
		                                <?php endif; ?>
		                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                            </tbody>
		                        </table>
		                    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('plugins/tables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/tables/js/datatable-init/datatable-basic.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halaman_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/halaman_laporan_pegawai.blade.php ENDPATH**/ ?>