

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Beranda'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Beranda <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Beranda Dosen <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
    <div class="card overflow-hidden">
            <div class="bg-info  bg-soft">
                <div class="row">
                    <div class="col-12">
                        <div class="text-black p-3">
                        <h5 class="text-black-bold">Peringatan!</h5>
                        <p> Bagi anda yang <strong> sudah memiliki </strong> fungsional dan pangkat maka <strong> wajib </strong> untuk mengisi histori jabatan fungsional dan
                            pangkat. Silahkan isi pada menu <strong> Data Dasar -> Perubahan Data Dosen -> Pilih bagian jabatan fungsional (bagi anda yang ingin 
                            mengisi histori jabatan fungsional) atau pilih pada bagian pangkat (bagi anda yang ingin mengisi histori pangkat)</strong></p>
                        </p>
                        <p><a href="perubahan">Perubahan Data Dosen</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card overflow-hidden">
            <div class="bg-info bg-soft">
                <div class="row">
                    <div class="col-12">
                        <div class="text-black p-3">
                        <h5 class="text-black-strong">Lengkap!</h5>
                        <p> Terima kasih telah melengkapi biodata diri anda. Saat ini sistem mendeteksi semua biodata diri anda yang disyaratkan sudah lengkap,
                            jika terjadi perubahan atau penambahan pengisian biodata diri maka sistem akan mengingatkan anda kembali untuk melakukan pengisian data.
                            Silahkan lanjutkan isi riwayat Tri Dharma Perguruan Tinggi anda. </p>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dosenmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3-level-user-skote\resources\views/user/index.blade.php ENDPATH**/ ?>