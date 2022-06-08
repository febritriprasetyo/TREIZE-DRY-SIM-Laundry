<?php $__currentLoopData = $riwayats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <th><?php echo e($loop->iteration); ?></th>
	<th><?php echo e($riwayat->nama_outlet); ?></th>
	<td><?php echo e($riwayat->kd_invoice); ?></td>
	<td><?php echo e($riwayat->nama_pelanggan); ?></td>
	<td><?php echo e(date('d M Y', strtotime($riwayat->tgl_pemberian))); ?></td>
	<td><?php echo e($riwayat->ket_bayar); ?></td>
	<td>
		<?php if($riwayat->status == 'baru'): ?>
        <span class="label label-pill label-info text-white"><?php echo e($riwayat->status); ?></span>
        <?php elseif($riwayat->status == 'proses'): ?>
        <span class="label label-pill label-warning text-white"><?php echo e($riwayat->status); ?></span>
        <?php elseif($riwayat->status == 'selesai'): ?>
        <span class="label label-pill label-success text-white"><?php echo e($riwayat->status); ?></span>
        <?php elseif($riwayat->status == 'diantar'): ?>
        <span class="label label-pill label-danger text-white"><?php echo e($riwayat->status); ?></span>
        <?php elseif($riwayat->status == 'diambil'): ?>
        <span class="label label-pill label-primary text-white"><?php echo e($riwayat->status); ?></span>
        <?php endif; ?>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/sort_halaman_laporan_pegawai.blade.php ENDPATH**/ ?>