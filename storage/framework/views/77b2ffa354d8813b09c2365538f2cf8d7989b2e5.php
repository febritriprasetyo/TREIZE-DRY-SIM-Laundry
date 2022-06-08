<?php $number = 1; ?>
<?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<th><?php echo e($number); ?></th>
	<th><?php echo e($transaksi->nama_outlet); ?></th>
	<td><?php echo e($transaksi->kd_invoice); ?></td>
	<td><?php echo e($transaksi->nama_pelanggan); ?></td>
	<td><?php echo e(date('d M Y', strtotime($transaksi->tgl_bayar))); ?></td>
	<td class="text-success font-weight-bold">Rp. <?php echo e(number_format($transaksi->harga_bayar,2,',','.')); ?></td>
	<td><?php echo e($transaksi->nama_pegawai); ?></td>
</tr>
<?php $number++; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/sort_halaman_laporan_transaksi.blade.php ENDPATH**/ ?>