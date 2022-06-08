<?php $__currentLoopData = $paket_satus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket_satu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="list-group-item d-flex justify-content-between">
	<div class="nama_barang">
		<p class="font-weight-bold"><?php echo e($paket_satu->nama_barang . ' - ' . $paket_satu->ket_barang); ?></p>
	</div>
	<div class="harga_barang">
		<p class="text-dark font-weight-bold">Rp. <?php echo e(number_format($paket_satu->harga_barang,2,',','.')); ?></p>
	</div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pesanan_pelanggan/outlet_tabel_satuan.blade.php ENDPATH**/ ?>