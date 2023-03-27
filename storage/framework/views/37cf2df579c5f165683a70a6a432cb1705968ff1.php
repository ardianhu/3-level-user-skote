

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Tambah Data'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Admin <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Tambah Data <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3-level-user-skote\resources\views/admin/add.blade.php ENDPATH**/ ?>