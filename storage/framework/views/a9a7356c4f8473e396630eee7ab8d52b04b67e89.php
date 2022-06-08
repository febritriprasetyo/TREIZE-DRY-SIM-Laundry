<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
	<style type="text/css">
		html{
			margin: 0;
			padding: 0;
			font-family: "Nunito", sans-serif;
		}
		.header{
			width: 100%;
			height: auto;
			background-color: #f7f7f7f7;
			padding-bottom: 50px;
		}
		.logo-laundry{
		    object-fit: cover;
		    width: 4rem;
		    height: 4rem;
		}
		.text-right{
			text-align: right;
		}
		.text-center{
			text-align: right;
		}
		.table-header tr td{
			padding: 5px;
			color: #999999;
			font-size: 12px;
		}
		.table-content tr th{
			padding: 8px;
			font-size: 11px;
			color: #999999;
			border-bottom: 1px solid #ddd;
		}
		.table-content tr td{
			padding: 8px;
			font-size: 11px;
			color: #454545;
			border-bottom: 1px solid #ddd;
		}
		.body-content{
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="header">
		<table style="width: 100%;" class="table-header">
			<tr>
				<td class="text-left" style="padding-top: 50px; padding-left: 50px; font-weight: bold; color: #454545;">TREIZE-DRY Laundry<br>Jasa Laundry Terbaik dan Berkualitas</td>
			</tr>
			<tr>
				<td colspan="2" style="font-size: 28px; color: #313131; padding-top: 15px; padding-right: 50px;" class="text-right">Invoice</td>
			</tr>
			<tr>
				<td colspan="2" class="text-right" style="padding-right: 50px;">
					<?php if($tanggal != ''): ?>
					<?php echo e($tanggal); ?>

					<?php else: ?>
					<?php echo e(date('d M Y', strtotime($start_date2)) . ' - ' . date('d M Y', strtotime($end_date2))); ?>

					<?php endif; ?>
				</td>
			</tr>
		</table>
	</div>
	<div class="body-content">
		<table style="width: 100%; border-collapse: collapse; padding-right: 50px; padding-left: 50px;" class="table-content">
			<tr>
				<th>NO</th>
				<th>OUTLET</th>
				<th>KD INVOICE</th>
				<th>PELANGGAN</th>
				<th>TGL BAYAR</th>
				<th>TOTAL BAYAR</th>
				<th>PEGAWAI</th>
			</tr>
			<?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($loop->iteration); ?></td>
				<td><?php echo e($transaksi->nama_outlet); ?></td>
				<td><?php echo e($transaksi->kd_invoice); ?></td>
				<td><?php echo e($transaksi->nama_pelanggan); ?></td>
				<td><?php echo e(date('d M Y', strtotime($transaksi->tgl_bayar))); ?></td>
				<td>Rp. <?php echo e(number_format($transaksi->harga_bayar,2,',','.')); ?></td>
				<td><?php echo e($transaksi->nama_pegawai); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<th colspan="4" style="border-bottom: 0px; padding-top: 10px; padding-bottom: 10px;"></th>
				<th style="padding-top: 10px; padding-bottom: 10px; color: #454545; text-align: left;">TOTAL PEMASUKKAN</th>
				<th style="padding-top: 10px; padding-bottom: 10px;"></th>
				<th style="padding-top: 10px; padding-bottom: 10px; text-align: right; color: #7572f7;">Rp. <?php echo e(number_format($pemasukan,2,',','.')); ?></th>
			</tr>
		</table>
	</div>
</body>
</html><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/pdf_laporan_transaksi.blade.php ENDPATH**/ ?>