
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('plugins/toastr/css/toastr.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo e(url('/kelola_pengguna')); ?>">Kelola Pengguna</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo e(url('/tambah_pengguna')); ?>">Tambah Pengguna</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Pengguna Baru</h4>
                    <div class="form-validation">
                        <form class="form-valide" action="<?php echo e(url('/simpan_pengguna')); ?>" method="post" enctype="multipart/form-data" name="pengguna_baru_form">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-kode-pengguna">Kode Pengguna <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-kode-pengguna" name="kd_pengguna" value="<?php echo e($max_code); ?>" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nama">Nama <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nama" name="nama" placeholder="Masukkan nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" name="username" placeholder="Masukkan username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Masukkan password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-role">Posisi <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-role" name="role">
                                        <option value="">-- Pilih Posisi --</option>
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-outlet">Outlet <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-outlet" name="id_outlet">
                                        <option value="" class="outlet_kosong">-- Pilih Outlet --</option>
                                        <?php $__currentLoopData = $outlets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($outlet->id); ?>"><?php echo e($outlet->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Foto <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input avatar-input" name="avatar" id="customFile">
                                      <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('plugins/toastr/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.form-validator.min.js')); ?>"></script>
<script type="text/javascript">
$(document).on('change', '#val-role', function(){
    if(this.value == 'admin')
    {
        $('.outlet_kosong').prop('selected', true);
        $('#val-outlet').prop('disabled', true);
    }else if(this.value == 'kasir'){
        $('#val-outlet').prop('disabled', false);
    }
});

<?php if($message = Session::get('tidak_tersimpan')): ?>
toastr.warning("<?php echo e($message); ?>","Peringatan !", {
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
<?php endif; ?>

$('.avatar-input').change(function() {
  $(this).next('label').text($(this).val());
});

$(function() {
  $("form[name='pengguna_baru_form']").validate({
    rules: {
      nama: "required",
      username: {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        minlength: 5
      },
      role: "required",
      id_outlet: "required"
    },
    messages: {
      nama: "<span style='color: red;'>Nama tidak boleh kosong</span>",
      username: "<span style='color: red;'>Username tidak boleh kosong</span>",
      password: {
        required: "<span style='color: red;'>Password tidak boleh kosong</span>",
        minlength: "<span style='color: red;'>Kata sandi harus lebih dari 5 karakter</span>"
      },
      role: "<span style='color: red;'>Silakan pilih posisi</span>",
      id_outlet: "<span style='color: red;'>Silakan pilih outlet</span>"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halaman_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pengguna/halaman_tambah_pengguna.blade.php ENDPATH**/ ?>