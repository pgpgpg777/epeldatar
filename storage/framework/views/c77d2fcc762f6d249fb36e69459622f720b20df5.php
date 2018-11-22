

<?php $__env->startSection('content'); ?>
    <div class="col-sm-8">

        <h2><?php echo e($service->service_name); ?></h2>
        Leírás: <?php echo e($service->service_description); ?><br>
        Logó: <?php echo e($service->service_logo_img); ?><br>
        Ár: <?php echo e($service->service_price); ?><br><br>

        <a href="<?php echo e(route("services.edit",$service->id)); ?>">EDIT</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>