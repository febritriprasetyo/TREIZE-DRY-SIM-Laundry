<?php $__currentLoopData = $paket_kilos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket_kilo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="list-group-item flex-column align-items-start">
    <div class="d-flex w-100 justify-content-start">
        <h5 class="mb-2"><?php echo e($paket_kilo->nama_paket); ?></h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table style="width: 100%;" class="tabel-paket">
                <tr>
                    <td>Harga Paket</td>
                    <td>:</td>
                    <td>Rp. <?php echo e(number_format($paket_kilo->harga_paket,2,',','.')); ?></td>
                </tr>
                <tr>
                    <td>Lama Cuci</td>
                    <td>:</td>
                    <td><?php echo e($paket_kilo->hari_paket); ?> Hari</td>
                </tr>
                <tr>
                    <td>Minimal Berat</td>
                    <td>:</td>
                    <td><?php echo e($paket_kilo->min_berat_paket); ?> Kg</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
        	<?php if($paket_kilo->antar_jemput_paket == 1): ?>
            <div style="background-color: #fff; border: 1px solid #7571f9; height: 70px; line-height: 70px; border-radius: 7px;">
                <div class="text-center text-dark font-weight-bold">
                    <p style="font-size: 16px;"><i class="icon-check text-success"></i> Gratis Pengantaran</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pesanan_pelanggan/outlet_tabel_kiloan.blade.php ENDPATH**/ ?>