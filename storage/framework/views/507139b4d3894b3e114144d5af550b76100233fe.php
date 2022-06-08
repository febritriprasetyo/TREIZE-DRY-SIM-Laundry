<table style="width: 100%;">
    <?php $__currentLoopData = $paket_satus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket_satu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td style="width: 50px; border-left: 1px solid #aaa;" class="item-satuan">
            <div class="numbering"><?php echo e($loop->iteration); ?></div>
        </td>
        <td style="width: 600px; font-weight: bold;" class="text-left item-satuan">
            <?php echo e($paket_satu->nama_barang . ' ' . $paket_satu->ket_barang); ?>

            <input type="text" name="kd_barang[]" value="<?php echo e($paket_satu->kd_barang); ?>" hidden="">
        </td>
        <td style="text-align: center;" class="item-satuan">
            <div class="d-flex justify-content-around">
                <button type="button" class="btn-xs btn-ammount text-info btn-min"><i class="fa fa-minus"></i></button>
                <input type="text" class="form-control-xs input-ammount" name="jumlah_barang[]" value="0" readonly="readonly" style="width: 15px; border: 0;">
                <button type="button" class="btn-xs btn-ammount text-info btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td style="font-weight: bold; width: 200px; border-right: 1px solid #aaa;" class="item-satuan">
            Rp. <?php echo e(number_format($paket_satu->harga_barang,2,',','.')); ?>

            <input type="text" hidden="" name="harga_satuan" class="harga_satuan" value="<?php echo e($paket_satu->harga_barang); ?>">
            <input type="text" hidden="" name="subtotal[]" class="subtotal">
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH E:\SOFTWARE 2\xampp\htdocs\laundry-management-system\resources\views/halaman_pelanggan/sort_outlet_tabel_satuan.blade.php ENDPATH**/ ?>