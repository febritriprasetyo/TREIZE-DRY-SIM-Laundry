<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TREIZE-DRY SIM Laundry</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('icons/favicon.png')); ?>">
    <link href="<?php echo e(asset('plugins/sweetalert/css/sweetalert.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body class="h-100" id="bg-login">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <?php if($penggunas->count() == 0): ?>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center">
                                    <h4>Registrasi Akun Awal</h4>
                                </div>
                                <form method="POST" action="<?php echo e(url('/registrasi_awal')); ?>" class="mt-5 mb-5" name="form_register" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input avatar-input" name="avatar" id="customFile">
                                          <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-30">Buat Akun</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center">
                                    <h4>Selamat Datang</h4>
                                    <?php if($message = Session::get('gagal_login')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" style="margin-top: 15px; margin-bottom: -20px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button> <strong>Peringatan!</strong> <?php echo e($message); ?></div>
                                    <?php endif; ?>
                                </div>
                                <form method="POST" action="<?php echo e(url('/login_verifikasi')); ?>" class="mt-5 mb-5 login-input" name="form_login">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group" style="margin-top: 15px; margin-bottom: 20px;">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group" style="margin-top: 15px; margin-bottom: 20px;">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-30">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <script src="<?php echo e(asset('plugins/common/common.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('js/gleek.js')); ?>"></script>
    <script src="<?php echo e(asset('js/styleSwitcher.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalert/js/sweetalert.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( document ).on( 'focus', ':input', function(){
                $( this ).attr( 'autocomplete', 'off' );
            });
        });
        
        $(function() {
          $("form[name='form_register']").validate({
            rules: {
              nama: "required",
              username: {
                required: true,
                minlength: 3
              },
              password: {
                required: true,
                minlength: 5
              }
            },
            messages: {
              nama: "<span style='color: red;'>Nama tidak boleh kosong</span>",
              username: "<span style='color: red;'>Username tidak boleh kosong</span>",
              password: "<span style='color: red;'>Password tidak boleh kosong</span>"
            },
            submitHandler: function(form) {
              form.submit();
            }
          });
        });

        $(function() {
          $("form[name='form_login']").validate({
            rules: {
              username: {
                required: true,
                minlength: 3
              },
              password: {
                required: true,
                minlength: 5
              }
            },
            messages: {
              username: "<span style='color: red;'>Username tidak boleh kosong</span>",
              password: "<span style='color: red;'>Password tidak boleh kosong</span>"
            },
            submitHandler: function(form) {
              form.submit();
            }
          });
        });

        $('.avatar-input').change(function() {
          $(this).next('label').text($(this).val());
        });

        <?php if($message = Session::get('tersimpan')): ?>
        swal(
            "Berhasil!",
            "<?php echo e($message); ?>",
            "success"
        )
        <?php endif; ?>
    </script>
</body>
</html><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_login.blade.php ENDPATH**/ ?>