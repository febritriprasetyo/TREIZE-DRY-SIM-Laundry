<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pegawai</title>
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
		.badge {
		    border-radius: 8px;
		    color: #fff;
		    display: inline-block;
		    line-height: 1;
		    min-width: 10px;
		    font-size: 10px;
		    font-weight: bold;
		    padding: 3px 7px;
		    text-align: center;
		    vertical-align: middle;
		    white-space: nowrap;
		}
		.badge-info{
			background-color: #4d7cff;
		}
		.badge-warning{
			background-color: #f29d56;
		}
		.badge-danger{
			background-color: #ff5e5e;
		}
		.badge-success{
			background-color: #6fd96f;
		}
		.badge-primary{
			background-color: #7571f9;
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
				<td style="padding-left: 50px; color: #454545; font-weight: bold;">PEGAWAI</td>
				<td style="font-size: 28px; color: #313131; padding-top: 15px; padding-right: 50px;" class="text-right">Invoice</td>
			</tr>
			<tr>
				<td style="padding-left: 50px; vertical-align: top;"><b>Kode: </b><?php echo e($users->kd_pengguna); ?></td>
				<td class="text-right" style="padding-right: 50px;">
					<?php if($tanggal != ''): ?>
					<?php echo e($tanggal); ?>

					<?php else: ?>
					<?php echo e(date('d M Y', strtotime($start_date2)) . ' - ' . date('d M Y', strtotime($end_date2))); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 50px; padding-top: -5px;"><b>Posisi: </b><?php echo e($users->role); ?></td>
			</tr>
			<tr>
				<td style="padding-left: 50px; padding-top: -5px;"><b>Nama: </b><?php echo e($users->name); ?></td>
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
				<th>TGL PEMBERIAN</th>
				<th>KET BAYAR</th>
				<th>STATUS</th>
			</tr>
			<?php $__currentLoopData = $riwayats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($loop->iteration); ?></td>
				<td><?php echo e($riwayat->nama_outlet); ?></td>
				<td><?php echo e($riwayat->kd_invoice); ?></td>
				<td><?php echo e($riwayat->nama_pelanggan); ?></td>
				<td><?php echo e(date('d M Y', strtotime($riwayat->tgl_pemberian))); ?></td>
				<td><?php echo e($riwayat->ket_bayar); ?></td>
				<td>
					<?php if($riwayat->status == 'baru'): ?>
			      	<span class="badge badge-info"><?php echo e($riwayat->status); ?></span>
			      	<?php elseif($riwayat->status == 'proses'): ?>
			      	<span class="badge badge-warning"><?php echo e($riwayat->status); ?></span>
			      	<?php elseif($riwayat->status == 'selesai'): ?>
			      	<span class="badge badge-success"><?php echo e($riwayat->status); ?></span>
			      	<?php elseif($riwayat->status == 'diantar'): ?>
			      	<span class="badge badge-danger"><?php echo e($riwayat->status); ?></span>
	                <?php elseif($riwayat->status == 'diambil'): ?>
	                <span class="badge badge-primary"><?php echo e($riwayat->status); ?></span>
			      	<?php endif; ?>
			     </td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<th colspan="5" style="border-bottom: 0px; padding-top: 10px; padding-bottom: 10px;"></th>
				<th style="padding-top: 10px; padding-bottom: 10px; text-align: left; color: #454545;">JUMLAH</th>
				<th style="padding-top: 10px; padding-bottom: 10px; text-align: right; color: #7572f7;"><?php echo e($riwayats->count()); ?></th>
			</tr>
		</table>
	</div>
</body>
</html><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/pdf_laporan_pegawai.blade.php ENDPATH**/ ?>