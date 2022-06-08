
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('plugins/sweetalert/css/sweetalert.css')); ?>" rel="stylesheet">
<?php if(auth()->user()->role == 'admin' || auth()->user()->role == 'kasir'): ?>
<style type="text/css">
    #table-pengunjung tr th, #table-pengunjung tr td{
        font-size: 12px;
    }
    #table-pemasukan tr th, #table-pemasukan tr td{
        font-size: 12px;
    }
    .form-control-xs {
        height: calc(1em + .375rem + 2px) !important;
        padding: .125rem .25rem !important;
        font-size: .75rem !important;
        line-height: 1.5;
    }
    .tabel-ket tr th{
        font-size: 12px;
        padding: 5px;
    }
</style>
<?php else: ?>
<style type="text/css">
    .laundry-gambar{
        object-fit: cover;
        width: 15rem;
        height: 15rem;
        position: absolute;
        margin-top: -50px;
    }
    .profil-pict{
        object-fit: cover;
        width: 7rem;
        height: 7rem;
    }
    .table_profil tr th, .table_profil tr td{
        padding: 5px;
        font-size: 12px;
    }
    .table_profil tr th{
        width: 100px;
    }
    .tabel-outlet tr th, .tabel-outlet tr td{
        padding: 5px;
        font-size: 12px;
    }
    .tabel-paket tr td{
        padding: 3px;
        font-size: 12px;
    }
    .foto{
        position: relative;
    }
    .upload-btn-wrapper button{
      position: absolute;
      background-color: #7571f9;
      color: #fff;
      top: 15%;
      left: 65%;
      transform: translate(-50%, -50%);
      border: 0px;
      border-radius: 50%;
      padding: 6px 0px;
      line-height: 1.42857;
      width: 25px;
      height: 25px;
      font-size: 10px;
    }
    .ubah_
    _input{
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }
</style>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
<?php if(auth()->user()->role == 'admin' || auth()->user()->role == 'kasir'): ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="modal fade" id="pemasukanModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Total Pemasukan</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-primary"><?php echo e(date('d M Y', strtotime(\App\Transaksi::min('tgl_bayar'))) . ' - ' . date('d M Y', strtotime(\App\Transaksi::max('tgl_bayar')))); ?></h4>
                                <p>Total Pemasukan : <b class="text-dark">Rp. <?php echo e(number_format(\App\Struk::sum('harga_bayar'),2,',','.')); ?></b></p>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12 mb-2">
                                <table class="mb-3 text-center tabel-ket" style="width: 100%;">
                                    <tr>
                                        <th style="font-size: 14px;"><i class="fa fa-angle-double-up text-success up_status" aria-hidden="true"></i></th>
                                        <th>:</th>
                                        <th class="text-left">Kenaikan</th>
                                        <th style="font-size: 14px;"><i class="fa fa-angle-double-down text-danger up_status" aria-hidden="true"></i></th>
                                        <th>:</th>
                                        <th class="text-left">Penurunan</th>
                                        <th style="font-size: 14px;"><b class="text-primary">=</b></th>
                                        <th>:</th>
                                        <th class="text-left">Tetap</th>
                                    </tr>
                                </table>
                                <input type="text" placeholder="Cari" class="form-control cari_input_pemasukan form-control-xs" name="">
                            </div>
                            <div class="col-md-12">
                                <table class="table" id="table-pemasukan" style="width: 100%;">
                                    <thead class="text-center">
                                        <tr>
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>TOTAL</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="isi_tabel_total">
                                        <?php $__currentLoopData = $semua_pelanggan_bayar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th style="padding-left: 20px;"><?php echo e($loop->iteration); ?></th>
                                            <td class="text-center"><?php echo e(date('d M Y', strtotime($pelanggan->tgl_bayar))); ?></td>
                                            <?php
                                            $total_hari = \App\Transaksi::join('struks', 'struks.kd_invoice', '=', 'transaksis.kd_invoice')
                                            ->where('transaksis.tgl_bayar', $pelanggan->tgl_bayar)
                                            ->sum('struks.harga_bayar');
                                            ?>
                                            <td class="total_pemasukan font-weight-bold" style="padding-left: 30px;" data-harga="<?php echo e($total_hari); ?>">Rp. <?php echo e(number_format($total_hari,2,',','.')); ?></td>
                                            <td class="text-center status_total" style="font-size: 14px;"></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="jmlPelangganModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Jumlah Pelanggan</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-primary"><?php echo e(date('d M Y', strtotime(\App\Transaksi::min('tgl_pemberian'))) . ' - ' . date('d M Y', strtotime(\App\Transaksi::max('tgl_pemberian')))); ?></h4>
                                <p>Jumlah Pelanggan : <b class="text-dark"><?php echo e(\App\Transaksi::all()->count()); ?></b></p>
                            </div>
                            <div class="col-md-12" style="margin-top: -15px;">
                                <hr>
                            </div>
                            <div class="col-md-12 mb-2">
                                <table class="mb-3 text-center tabel-ket" style="width: 100%;">
                                    <tr>
                                        <th style="font-size: 14px;"><i class="fa fa-angle-double-up text-success up_status" aria-hidden="true"></i></th>
                                        <th>:</th>
                                        <th class="text-left">Kenaikan</th>
                                        <th style="font-size: 14px;"><i class="fa fa-angle-double-down text-danger up_status" aria-hidden="true"></i></th>
                                        <th>:</th>
                                        <th class="text-left">Penurunan</th>
                                        <th style="font-size: 14px;"><b class="text-primary">=</b></th>
                                        <th>:</th>
                                        <th class="text-left">Tetap</th>
                                    </tr>
                                </table>
                                <input type="text" placeholder="Cari" class="form-control cari_input_jumlah form-control-xs" name="">
                            </div>
                            <div class="col-md-12">
                                <table class="table" id="table-pengunjung" style="width: 100%;">
                                    <thead class="text-center">
                                        <tr>
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>JUMLAH</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="isi_tabel_jumlah">
                                        <?php $__currentLoopData = $semua_pelanggan_harian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th style="padding-left: 20px;"><?php echo e($loop->iteration); ?></th>
                                            <td class="text-center"><?php echo e(date('d M Y', strtotime($pelanggan->tgl_pemberian))); ?></td>
                                            <?php
                                            $jumlah_pelanggan = \App\Transaksi::where('tgl_pemberian', $pelanggan->tgl_pemberian)
                                            ->count();
                                            ?>
                                            <td class="text-center jumlah_hari font-weight-bold"><?php echo e($jumlah_pelanggan); ?></td>
                                            <td class="text-center status_jumlah" style="font-size: 14px;"></td>
                                        </tr>
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
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-dark">Pegawai</h3>
                    <div class="d-inline-block">
                        <h2 class="text-dark"><?php echo e($jml_pegawai); ?></h2>
                        <p class="text-dark mb-0">Jumlah Pegawai</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-dark">Pesanan Selesai</h3>
                    <div class="d-inline-block">
                        <h2 class="text-dark"><?php echo e($jml_selesai); ?></h2>
                        <p class="text-dark mb-0">Jumlah Selesai</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-dark">Pelanggan</h3>
                    <div class="d-inline-block">
                        <h2 class="text-dark"><?php echo e($jml_pelanggan); ?></h2>
                        <p class="text-dark mb-0">Jumlah Pelanggan</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-dark">Cabang Outlet</h3>
                    <div class="d-inline-block">
                        <h2 class="text-dark"><?php echo e($jml_outlet); ?></h2>
                        <p class="text-dark mb-0">Jumlah Outlet</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-building-o"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="judul">
                                <h4>Jumlah Pelanggan</h4>
                            </div>
                            <div class="semua-btn">
                                <button class="btn btn-primary font-weight-bold text-white" data-toggle="modal" data-target="#jmlPelangganModal">Semua <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <canvas id="myChart" style="width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengunjung Outlet</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table" id="table-pengunjung" style="width: 100%;">
                                <thead class="text-center">
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>WAKTU</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pelanggan_terbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th style="padding-left: 20px;"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($pelanggan->nama_pelanggan); ?></td>
                                        <?php
                                        \Carbon\Carbon::setLocale('id');
                                        ?>
                                        <td><?php echo e(Carbon\Carbon::parse($pelanggan->created_at)->diffForHumans()); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="judul">
                                <h4>Total Pemasukan</h4>
                                <p>Total Pemasukan Sejak Awal</p>
                                <h3>Rp. <?php echo e(number_format(\App\Struk::sum('harga_bayar'),2,',','.')); ?></h3>
                            </div>
                            <div class="semua-btn">
                                <button class="btn btn-primary font-weight-bold text-white" data-toggle="modal" data-target="#pemasukanModal">Semua <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <canvas id="myBarChart" style="width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card gradient-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mt-4 ml-5 text-primary">Selamat Datang <?php echo e(auth()->user()->name); ?>!</h4>
                            <p class="ml-5 mt-4 text-dark" style="font-weight: 500;">TREIZE-DRY SIM Laundry merupakan jasa layanan laundry yang merintis pada tahun 2022 dengan memanfaatkan teknologi untuk mengembangkan sistem informasi layanannya. Oleh karena itu, berbekal alat dan bahan yang berkualitas, keahlian, serta pengalaman yang mumpuni, Kami mengutamakan kepuasan layanan Pelanggan.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo e(asset('images/laundry.png')); ?>" class="laundry-gambar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" class="form_edit_identitas" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="d-flex justify-content-between" style="margin-bottom: -10px;">
                                    <h4>Profil</h4>
                                    <div class="edit-profil-button" style="margin-top: -10px;">
                                        <button type="button" style="border: 0px; background-color: #fff;" class="btn text-primary edit_identitas_btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button type="submit" style="border: 0px; background-color: #fff;" class="btn text-primary update_identitas_btn" hidden=""><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="foto">
                                        <img src="<?php echo e(asset('/pictures/' . auth()->user()->avatar)); ?>" class="profil-pict rounded-circle img-thumbnail">
                                        <div class="upload-btn-wrapper ubah_foto_file" hidden="">
                                            <button type="button" class="ubah_foto_btn btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <input type="file" name="ubah_foto_input" class="ubah_foto_input" hidden="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="btn btn-sm font-weight-bold mt-1" style="background-color: #6fd96f; color: #fff;"><?php echo e(auth()->user()->role); ?></div>
                                </div>
                                <table class="table_profil mt-3" style="width: 100%;">
                                    <tr class="align-top">
                                        <th>Kode Pelanggan</th>
                                        <td>:</td>
                                        <td><?php echo e(auth()->user()->kd_pengguna); ?></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td class="data_identitas"><?php echo e(auth()->user()->name); ?></td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_nama_pelanggan" value="<?php echo e(auth()->user()->name); ?>"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Gender</th>
                                        <td>:</td>
                                        <?php
                                        $gender = \App\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        ?>
                                        <td>
                                            <?php if($gender->jk_pelanggan == 'L'): ?>
                                            Laki-laki
                                            <?php else: ?>
                                            Perempuan
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Email</th>
                                        <td>:</td>
                                        <?php
                                        $email = \App\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        ?>
                                        <td class="data_identitas"><?php echo e($email->email_pelanggan); ?></td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_email_pelanggan" value="<?php echo e($email->email_pelanggan); ?>"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>No HP</th>
                                        <td>:</td>
                                        <?php
                                        $no_hp = \App\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        ?>
                                        <td class="data_identitas"><?php echo e($no_hp->no_hp_pelanggan); ?></td>
                                        <td class="input_ubah" hidden=""><input required="" type="text" name="ubah_no_hp_pelanggan" class="number_input" value="<?php echo e($no_hp->no_hp_pelanggan); ?>"></td>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <?php
                                        $alamat = \App\Pelanggan::select('pelanggans.*')
                                        ->where('kd_pelanggan', auth()->user()->kd_pengguna)
                                        ->first();
                                        ?>
                                        <td class="data_identitas"><?php echo e($alamat->alamat_pelanggan); ?></td>
                                        <td class="input_ubah" hidden="">
                                            <textarea rows="4" id="comment" name="ubah_alamat_pelanggan" style="font-size: 12px;" required=""><?php echo e($alamat->alamat_pelanggan); ?></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">Layanan Kami</h4>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <select class="form-control pilih_outlet" name="pilih_outlet">
                                <?php $__currentLoopData = $outlets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($outlet->id); ?>" data-loop="<?php echo e($loop->iteration); ?>"><?php echo e($outlet->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <p class="text-dark font-weight-bold" style="font-size: 14px;">Keterangan Outlet</p>
                            <div class="alert alert-danger"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<a href="" target="_blank" class="alert-link alamat_outlet"></a></div>
                        </div>
                        <div class="col-md-12">
                            <table style="width: 50%;" class="tabel-outlet">
                                <tr>
                                    <th class="alert-top">Outlet</th>
                                    <td>:</td>
                                    <td class="nama_outlet"></td>
                                </tr>
                                <tr>
                                    <th class="alert-top">Hotline</th>
                                    <td>:</td>
                                    <td class="hotline_outlet"></td>
                                </tr>
                                <tr>
                                    <th class="alert-top">Email</th>
                                    <td>:</td>
                                    <td class="email_outlet"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12 mt-3">
                            <p class="text-dark font-weight-bold" style="font-size: 14px;">Paket Laundry</p>
                        </div>
                        <div class="col-md-12">
                            <div class="default-tab">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#paket_kiloan">Paket Kiloan</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paket_satuan">Paket Satuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="paket_kiloan" role="tabpanel">
                                        <div class="list-group paket_kiloan_list">
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paket_satuan">
                                        <ul class="list-group paket_satuan_list">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<style url="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></style>
<script src="<?php echo e(asset('plugins/sweetalert/js/sweetalert.min.js')); ?>"></script>
<?php if(auth()->user()->role == 'admin' || auth()->user()->role == 'kasir'): ?>
<script type="text/javascript">
$(document).ready(function(){
    $('.cari_input_jumlah').on('keyup', function(){
        var searchTerm = $(this).val().toLowerCase();
        $(".isi_tabel_jumlah tr").each(function(){
          var lineStr = $(this).text().toLowerCase();
          if(lineStr.indexOf(searchTerm) == -1){
            $(this).hide();
          }else{
            $(this).show();
          }
        });
    });
    $('.cari_input_pemasukan').on('keyup', function(){
        var searchTerm = $(this).val().toLowerCase();
        $(".isi_tabel_total tr").each(function(){
          var lineStr = $(this).text().toLowerCase();
          if(lineStr.indexOf(searchTerm) == -1){
            $(this).hide();
          }else{
            $(this).show();
          }
        });
    });
    $('.status_jumlah').each(function(){
        var jml_setelah = $(this).closest('tr').next().find('.jumlah_hari').html();
        var jml_sekarang = $(this).closest('td').prev().html();
        var hasil = parseInt(jml_sekarang) - parseInt(jml_setelah);
        if(parseInt(hasil) < 0){
            $(this).html('<i class="fa fa-angle-double-down text-danger down_status" aria-hidden="true"></i>');
        }else if(parseInt(hasil) > 0){
            $(this).html('<i class="fa fa-angle-double-up text-success up_status" aria-hidden="true"></i>');
        }else{
            $(this).html('<b class="text-primary same_status">=</b>');
        }
    });
    $('.status_total').each(function(){
        var jml_setelah = $(this).closest('tr').next().find('.total_pemasukan').attr('data-harga');
        var jml_sekarang = $(this).closest('td').prev().attr('data-harga');
        var hasil = parseInt(jml_sekarang) - parseInt(jml_setelah);
        if(parseInt(hasil) < 0){
            $(this).html('<i class="fa fa-angle-double-down text-danger down_status" aria-hidden="true"></i>');
        }else if(parseInt(hasil) > 0){
            $(this).html('<i class="fa fa-angle-double-up text-success up_status" aria-hidden="true"></i>');
        }else{
            $(this).html('<b class="text-primary same_status">=</b>');
        }
    });
});

var ctx = document.getElementById('myChart').getContext('2d');
var ctx2 = document.getElementById('myBarChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            <?php $__currentLoopData = $pelanggan_harian->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            '<?php echo e($pelanggan->tgl_pemberian); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        datasets: [{
            label: 'Jumlah Pelanggan (Harian)',
            data: [
            <?php $__currentLoopData = $pelanggan_harian->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $jumlah_pelanggan = \App\Transaksi::where('tgl_pemberian', $pelanggan->tgl_pemberian)
            ->count();
            ?>
                '<?php echo e($jumlah_pelanggan); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(117, 113, 249)',
            borderWidth: 3
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Jumlah Pelanggan (Harian)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
    }
});
var myBarChart = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: [
            <?php $__currentLoopData = $pelanggan_bayar->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            '<?php echo e($pelanggan->tgl_bayar); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'RGB(117, 113, 249)',
            borderColor: 'RGB(117, 113, 249)',
            data: [
                <?php $__currentLoopData = $pelanggan_bayar->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $total_hari = \App\Transaksi::join('struks', 'struks.kd_invoice', '=', 'transaksis.kd_invoice')
                ->where('transaksis.tgl_bayar', $pelanggan->tgl_bayar)
                ->sum('struks.harga_bayar');
                ?>
                "<?php echo e($total_hari); ?>",
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Total Pemasukan (Harian)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    callback: function(value, index, values) {
                      if (parseInt(value) >= 1000) {
                         return 'Rp. ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                      } else {
                         return 'Rp. ' + value;
                      }
                   }
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
    }
});
</script>
<?php else: ?>
<script type="text/javascript">
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

$(".number_input").inputFilter(function(value) {
  return /^-?\d*$/.test(value); });

$(document).on('click', '.edit_identitas_btn', function(){
    $(this).prop('hidden', true);
    $('.update_identitas_btn').prop('hidden', false);
    $('.data_identitas').prop('hidden', true);
    $('.input_ubah').prop('hidden', false);
    $('.ubah_foto_file').prop('hidden', false);
});

$('.form_edit_identitas').submit(function(e){
    e.preventDefault();
    var request = new FormData(this);
    $.ajax({
        url: "<?php echo e(url('/update_profil_pelanggan')); ?>",
        method: "POST",
        data: request,
        contentType: false,
        cache: false,
        processData: false,
        success:function(data){
            if(data == "sukses"){
                swal({
                    title: "Berhasil!",
                    text: "Profil berhasil diubah",
                    type: "success"
                }, function(){
                    window.open("<?php echo e(url('/dashboard')); ?>", "_self");
                });
            }else{
                $('.edit_identitas_btn').prop('hidden', false);
                $('.update_identitas_btn').prop('hidden', true);
                $('.data_identitas').prop('hidden', false);
                $('.input_ubah').prop('hidden', true);
                $('.ubah_foto_file').prop('hidden', true);
            }
        }
    });
});

$(document).on('click', '.ubah_foto_btn', function(e){
    e.preventDefault();
    $('.ubah_foto_input').click();
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.profil-pict').attr('src', e.target.result);
    }   
    reader.readAsDataURL(input.files[0]);
  }
}

$(".ubah_foto_input").change(function() {
  readURL(this);
});

$(document).ready(function(){
    $('.pilih_outlet').change();
});

$(document).on('change', '.pilih_outlet', function() {
    var id = $(this).val();
    $.ajax({
        url: "<?php echo e(url('/data_outlet_dashboard')); ?>/" + id,
        method: "GET",
        success:function(response){
            $('.alamat_outlet').attr('href', 'http://maps.google.com/?q='+response.outlets.alamat);
            $('.alamat_outlet').html(response.outlets.alamat);
            $('.nama_outlet').html(response.outlets.nama);
            $('.hotline_outlet').html(response.outlets.hotline);
            $('.email_outlet').html(response.outlets.email);
            $.ajax({
                url: "<?php echo e(url('/outlet_tabel_kiloan')); ?>/" + id,
                method: "GET",
                success:function(data1){
                    $('.paket_kiloan_list').html(data1);
                    $.ajax({
                        url: "<?php echo e(url('/outlet_tabel_satuan')); ?>/" + id,
                        method: "GET",
                        success:function(data2){
                            $('.paket_satuan_list').html(data2);
                        }
                    });
                }
            });
        }
    })
});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halaman_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_dashboard.blade.php ENDPATH**/ ?>