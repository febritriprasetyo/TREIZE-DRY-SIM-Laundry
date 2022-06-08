<?php $__currentLoopData = $paket_kilos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket_kilo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-3">
    <div class="form-group">
        <label>
            <input type="radio" name="jenis_paket" class="card-input-element jenis_paket" data-berat="<?php echo e($paket_kilo->min_berat_paket); ?>" data-nama="<?php echo e($paket_kilo->nama_paket); ?>" data-harga="<?php echo e($paket_kilo->harga_paket); ?>" data-antar="<?php echo e($paket_kilo->antar_jemput_paket); ?>" value="<?php echo e($paket_kilo->kd_paket); ?>">
            <div class="card card-line card-input">
              <div class="card-body">
                <h5><?php echo e($paket_kilo->nama_paket); ?></h5>
                <p>- Harga paket : Rp. <?php echo e(number_format($paket_kilo->harga_paket,0,',','.')); ?></p>
                <p style="margin-top: -15px;">- Lama Cuci : <?php echo e($paket_kilo->hari_paket . ' hari'); ?></p>
                <p style="margin-top: -15px;">- Minimal Berat : <?php echo e($paket_kilo->min_berat_paket); ?> kg</p>
                <?php if($paket_kilo->antar_jemput_paket == 1): ?>
                <hr>
                <p style="margin-bottom: -5px;"><i class="icon-check text-success"></i> Gratis pengantaran</p>
                <?php endif; ?>
              </div>
            </div>
        </label>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pelanggan/sort_outlet_tabel_kiloan.blade.php ENDPATH**/ ?>