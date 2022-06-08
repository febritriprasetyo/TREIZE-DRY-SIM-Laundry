
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/toastr/css/toastr.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/clockpicker/dist/jquery-clockpicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/jquery-asColorPicker-master/css/asColorPicker.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo e(url('/laporan_transaksi')); ?>">Laporan Transaksi</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-body">
                    <div class="row">
                    	<div class="col-md-12">
                    		<h4 class="card-title">Daftar Transaksi</h4>
                    	</div>
                    </div>
                    <div class="row mt-3">
                    	<div class="col-md-12">
                    		<form class="filter_form" target="_blank" action="<?php echo e(url('/pdf_laporan_transaksi')); ?>" method="POST">
                    			<?php echo csrf_field(); ?>
                    			<input type="text" name="check_button" class="check_button" hidden="">
                    			<div class="form-row align-items-center">
                    				<div class="col-md-8">
                    					<div class="input-group">
                    						<div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input id="semua_check" name="check_semua" type="checkbox" checked="" value="1">
                                                    <label for="semua_check" class="form-check-label">&nbsp;Semua</label>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control datepicker-autoclose" name="start_date" placeholder="mm/dd/yyyy" disabled="" autocomplete="off">
                                            <input type="text" class="form-control datepicker-autoclose" name="end_date" placeholder="mm/dd/yyyy" disabled="" autocomplete="off">
                    					</div>
                    				</div>
                    				<div class="col-md-2">
                    					<button type="button" class="btn mb-1 btn-light btn-block btn-flat font-weight-bold filter_laporan_btn"><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</button>
                    				</div>
                    				<div class="col-md-2">
                    					<button type="button" class="btn mb-1 btn-primary btn-block btn-flat font-weight-bold pdf_laporan_btn"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;PDF</button>
                    				</div>
                    			</div>
                    		</form>
                    	</div>
                    	<div class="col-md-12">
                    		<hr>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<div class="table-responsive">
		                        <table class="table table-bordered zero-configuration">
		                            <thead style="text-align: center;">
		                                <tr class="thead">
		                                    <th>No</th>
		                                    <th>Outlet</th>
		                                    <th>Kd Invoice</th>
		                                    <th>Pelanggan</th>
		                                    <th>Tgl Bayar</th>
		                                    <th>Total Bayar</th>
		                                    <th>Pegawai</th>
		                                </tr>
		                            </thead>
		                            <tbody class="isi_tabel">
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
<script src="<?php echo e(asset('plugins/toastr/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/clockpicker/dist/jquery-clockpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins-init/form-pickers-init.js')); ?>"></script>
<script type="text/javascript">

	$(document).on('click', '#semua_check', function(){
		if(this.checked == true){
	        $(this).val('1');
	        $('.datepicker-autoclose').prop('disabled', true);
	        $('.datepicker-autoclose').val('');
	        $('.check_button').val('filter');
			$('.filter_form').submit();
	    }else{
	        $(this).val('0');
	        $('.datepicker-autoclose').prop('disabled', false);
	    }
	});

	$(document).on('click', '.filter_laporan_btn', function(){
		var start_date = $('input[name=start_date]').val();
		var end_date = $('input[name=end_date]').val();
		if((start_date != '' && end_date != '') || $('#semua_check').val() == '1'){
			$('.check_button').val('filter');
			$('.filter_form').submit();
		}else if(start_date == '' && end_date == ''){
			tanggalKosong("Tanggal awal dan akhir tidak boleh kosong");
		}else if(start_date == ''){
			tanggalKosong("Tanggal awal tidak boleh kosong");
		}else{
			tanggalKosong("Tanggal akhir tidak boleh kosong");
		}
	});

	$(document).on('click', '.pdf_laporan_btn', function(){
		var start_date = $('input[name=start_date]').val();
		var end_date = $('input[name=end_date]').val();
		if((start_date != '' && end_date != '') || $('#semua_check').val() == '1'){
			$('.check_button').val('cetak_pdf');
			$('.filter_form').submit();
		}else if(start_date == '' && end_date == ''){
			tanggalKosong("Tanggal awal dan akhir tidak boleh kosong");
		}else if(start_date == ''){
			tanggalKosong("Tanggal awal tidak boleh kosong");
		}else{
			tanggalKosong("Tanggal akhir tidak boleh kosong");
		}
	});

	function tanggalKosong(keterangan){
		toastr.warning(keterangan, "Peringatan!", {
		    timeOut:5e3,
		    closeButton:!0,
		    debug:!1,
		    newestOnTop:!0,
		    progressBar:!0,
		    positionClass:"toast-bottom-right",
		    preventDuplicates:!0,
		    onclick:null,
		    showDuration:"300",
		    hideDuration:"1000",
		    extendedTimeOut:"1000",
		    showEasing:"swing",
		    hideEasing:"linear",
		    showMethod:"fadeIn",
		    hideMethod:"fadeOut",
		    tapToDismiss:!1
		});
	}

	$('.filter_form').submit(function(e){
		var check_button = $('.check_button').val();
		if(check_button == 'filter'){
			e.preventDefault();
			var request = new FormData(this);
			$.ajax({
				url: "<?php echo e(url('/filter_laporan_transaksi')); ?>",
				method: "POST",
				data: request,
				contentType: false,
				processData: false,
				success:function(data){
					$('.isi_tabel').html(data);
				}
			});
		}
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halaman_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_laporan/halaman_laporan_transaksi.blade.php ENDPATH**/ ?>