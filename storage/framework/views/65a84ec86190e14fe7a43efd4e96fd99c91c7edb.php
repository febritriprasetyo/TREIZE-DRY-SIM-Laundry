
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('plugins/sweetalert/css/sweetalert.css')); ?>" rel="stylesheet">
<style type="text/css">
.table_transaksi tr td, .table_transaksi tr th{
	padding: 5px;
	font-size: 12px;
}
.tabel-identitas tr td, .tabel-identitas tr th{
    max-width: 120px;
}
.table-paket{
    font-size: 14px;
}
.line-total{
    width: 100%;
    border-top: 2px solid #aaa;
}
.table-total tr th, .table-total tr td{
    padding: 3px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Layanan Laundry</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/kelola_pelanggan')); ?>">Kelola Pelanggan</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo e(url('/detail_pelanggan_non_member/' . $id)); ?>">Detail Pelanggan</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <input type="text" name="id_pdf" class="id_pdf" value="<?php echo e($transaksis->id); ?>" hidden="">
        </div>
    </div>
	<div class="row">
		<div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3 rounded-circle" src="<?php echo e(asset('/pictures/'.$akun_pelanggans->avatar)); ?>" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0"><?php echo e($pelanggans->kd_pelanggan); ?></h3>
                            <p class="text-muted mb-0"><?php echo e($pelanggans->nama_pelanggan); ?></p>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<table style="width: 100%; margin-left: -10px;" class="tabel-identitas">
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Gender</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;">
                    					<?php if($pelanggans->jk_pelanggan == 'L'): ?>
                    					Laki-laki
                    					<?php else: ?>
                    					Perempuan
                    					<?php endif; ?>
                    				</td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">No HP</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top"><?php echo e($pelanggans->no_hp_pelanggan); ?></td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Email</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    				<td style="padding: 5px;" class="align-top"><?php echo e($pelanggans->email_pelanggan); ?></td>
                    			</tr>
                    			<tr>
                    				<th style="padding: 5px;" class="text-dark text-left align-top">Alamat</th>
                    				<td style="padding: 5px;" class="align-top">:</td>
                    			</tr>
                    			<tr>
                    				<td colspan="3" style="padding: 5px;" class="align-top"><?php echo e($pelanggans->alamat_pelanggan); ?></td>
                    			</tr>
                    		</table>
                    	</div>
                    </div>
                    <div class="row mt-3 mb-1">
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-primary"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                <table style="width: 100%; margin: 5px;" class="text-left tabel-identitas">
                                	<tr>
                                		<th style="padding: 5px;" class="align-top">Username : </th>
                                	</tr>
                                	<tr>
                                		<td colspan="2" style="padding: 5px;" class="align-top"><?php echo e($akun_pelanggans->username); ?></td>
                                	</tr>
                                	<tr>
                                		<th style="padding: 5px;" class="align-top">Password : </th>
                                	</tr>
                                	<tr>
                                		<td colspan="2" style="padding: 5px;" class="align-top"><?php echo e($pelanggans->password); ?></td>
                                	</tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
					<h4 class="card-title">Keterangan Pesanan</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <table border="0" class="table_transaksi">
                                <tr>
                                    <th>Outlet</th>
                                    <td>:</td>
                                    <td><?php echo e($transaksis->nama_outlet); ?></td>
                                </tr>
                                <tr>
                                    <th>Kode Invoice</th>
                                    <td>:</td>
                                    <td><?php echo e($transaksis->kd_invoice); ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pemberian</th>
                                    <td>:</td>
                                    <td><?php echo e(date('d M Y', strtotime($transaksis->tgl_pemberian))); ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td>:</td>
                                    <td>
                                        <?php if($transaksis->tgl_selesai == null): ?>
                                        -
                                        <?php else: ?>
                                        <?php echo e(date('d M Y', strtotime($transaksis->tgl_selesai))); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Bayar</th>
                                    <td>:</td>
                                    <td>
                                        <?php if($transaksis->tgl_bayar == null): ?>
                                        -
                                        <?php else: ?>
                                        <?php echo e(date('d M Y', strtotime($transaksis->tgl_bayar))); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table border="0" class="table_transaksi">
                                <tr>
                                    <th>Diskon</th>
                                    <td>:</td>
                                    <td>
                                        <?php if($transaksis->diskon == ''): ?>
                                        -
                                        <?php else: ?>
                                        <?php echo e($transaksis->diskon); ?> %
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pajak</th>
                                    <td>:</td>
                                    <td>
                                        <?php if($transaksis->pajak == ''): ?>
                                        -
                                        <?php else: ?>
                                        <?php echo e($transaksis->pajak); ?> %
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keterangan Bayar</th>
                                    <td>:</td>
                                    <td><?php echo e($transaksis->ket_bayar); ?></td>
                                </tr>
                                <tr>
                                    <th>Pegawai</th>
                                    <td>:</td>
                                    <td><?php echo e($transaksis->nama_pegawai); ?></td>
                                </tr>
                                <tr>
                                    <th>Metode Pembayaran</th>
                                    <td>:</td>
                                    <td>
                                        <?php if($checkout_kilos != ""): ?>
                                        <?php echo e($checkout_kiloan->metode_pembayaran); ?>

                                        <?php else: ?>
                                        <?php echo e($checkout_satuan->metode_pembayaran); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                        <?php if($transaksis->status != 'diantar' && $transaksis->status != 'diambil'): ?>
                            <?php if($checkout_kilos != ""): ?>
                            <select class="form-control status_select status-select-kilo" name="status">
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <?php else: ?>
                            <select class="form-control status_select status-select-satu" name="status">
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if($transaksis->status == 'diantar'): ?>
                            <div class="alert alert-danger font-weight-bold text-center ket-proses">Pesanan Sedang Diantar</div>
                            <?php else: ?>
                            <div class="alert alert-dark font-weight-bold text-center ket-proses">Pesanan Telah Diterima</div>
                            <?php endif; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <?php if($checkout_kilos != ""): ?>
                        <div class="col-md-12 table-responsive" id="table_kiloan">
                            <table class="table table-paket">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Paket</th>
                                        <th>Berat Barang</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <?php $__currentLoopData = $checkout_kilos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkout_kilo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th><?php echo e($loop->iteration); ?></th>
                                        <th><?php echo e($checkout_kilo->nama_paket); ?></th>
                                        <td><?php echo e($checkout_kilo->berat_barang); ?></td>
                                        <td>Rp. <?php echo e(number_format($checkout_kilo->harga_paket_satuan,2,',','.')); ?></td>
                                        <td>Rp. <?php echo e(number_format($checkout_kilo->harga_paket,2,',','.')); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                        <div class="col-md-12 table-responsive" id="table_satuan">
                            <table class="table table-paket">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Barang</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $checkout_satus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkout_satu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="table-light">
                                        <th><?php echo e($loop->iteration); ?></th>
                                        <th><?php echo e($checkout_satu->nama_barang); ?></th>
                                        <td>
                                            <?php if($checkout_satu->ket_barang == null): ?>
                                            -
                                            <?php else: ?>
                                            <?php echo e($checkout_satu->ket_barang); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($checkout_satu->jumlah_barang); ?></td>
                                        <td>Rp. <?php echo e(number_format($checkout_satu->harga_barang_satuan,2,',','.')); ?></td>
                                        <td>Rp. <?php echo e(number_format($checkout_satu->harga_barang,2,',','.')); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-8">
                            <table style="width: 100%;" class="table-total">
                                <tr>
                                    <th>Total Paket</th>
                                    <td class="text-success">Rp. <?php echo e(number_format($harga_total,2,',','.')); ?></td>
                                </tr>
                                <?php if($checkout_kilos != ""): ?>
                                <?php if($checkout_kiloan->antar_jemput_paket == 1 || $checkout_kiloan->harga_antar != 0): ?>
                                <tr>
                                    <th>Biaya Antar</th>
                                    <td>
                                        Rp. <?php echo e(number_format($checkout_kiloan->harga_antar,2,',','.')); ?>

                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php else: ?>
                                <?php if($checkout_satuan->harga_antar != 0): ?>
                                <tr>
                                    <th>Biaya Antar</th>
                                    <td>
                                        Rp. <?php echo e(number_format($checkout_satuan->harga_antar,2,',','.')); ?>

                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endif; ?>
                                <tr>
                                    <td colspan="2" class="line-total"></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="font-weight-bold">
                                        <?php if($checkout_kilos != ""): ?>
                                        Rp. <?php echo e(number_format($checkout_kiloan->harga_total,2,',','.')); ?>

                                        <?php else: ?>
                                        Rp. <?php echo e(number_format($checkout_satuan->harga_total,2,',','.')); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size: 12px;">(Belum termasuk diskon dan pajak)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <?php if($transaksis->status != 'diantar' && $transaksis->status != 'diambil'): ?>
                            <a href="<?php echo e(url('/hapus_pelanggan/'.$id)); ?>" class="btn btn-danger btn-block btn-flat font-weight-bold"><i class="fa fa-ban"></i>&nbsp;&nbsp;Batalkan Pesanan</a>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary btn-block btn-flat font-weight-bold pdf-btn"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Cetak PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('plugins/sweetalert/js/sweetalert.min.js')); ?>"></script>
<script type="text/javascript">
    <?php if($message = Session::get('terubah_status')): ?>
    swal(
        "Berhasil!",
        "<?php echo e($message); ?>",
        "success"
    );
    <?php endif; ?>

    $(document).on('click', '.pdf-btn', function(e){
        e.preventDefault();
        var id = $('.id_pdf').val();
        window.open("<?php echo e(url('/pdf_pelanggan')); ?>/" + id, '_blank');
    });

    $(document).ready(function(){
        var status = "<?php echo e($transaksis->status); ?>";
        $('.status_select').val(status).changed();
    });

    $('.status-select-kilo').change(function() {
        var id = "<?php echo e($transaksis->id); ?>";
        var status = $(this).val();
        $.ajax({
            url: "<?php echo e(url('/update_status_transaksi')); ?>/" + id + "/" + status,
            method: "GET",
            success:function(data){
                if(data == "selesai"){
                    window.open("<?php echo e(url('/kelola_pelanggan')); ?>", "_self");
                }else{
                    window.open("<?php echo e(url('/detail_pelanggan_non_member/' . $id)); ?>", "_self");
                }
            }
        });
    });

    $('.status-select-satu').change(function() {
        var id = "<?php echo e($transaksis->id); ?>";
        var status = $(this).val();
        $.ajax({
            url: "<?php echo e(url('/update_status_transaksi')); ?>/" + id + "/" + status,
            method: "GET",
            success:function(data){
                if(data == "selesai"){
                    window.open("<?php echo e(url('/kelola_pelanggan')); ?>", "_self");
                }else{
                    window.open("<?php echo e(url('/detail_pelanggan_non_member/' . $id)); ?>", "_self");
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halaman_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pelanggan/detail_pelanggan_non_member.blade.php ENDPATH**/ ?>