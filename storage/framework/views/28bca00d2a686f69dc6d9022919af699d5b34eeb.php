<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
	<div class="col-sm-6">

		<h4><label class="col-md-4 col-form-label text-md-left">Szolgáltatás neve:</label><?php echo e($service->service_name); ?></h4>
		<h6><label class="col-md-4 col-form-label text-md-left">Leírás:</label><?php echo e($service->service_description); ?></h6>
		<h6><label class="col-md-4 col-form-label text-md-left">Logó:</label><?php echo e($service->service_logo_img); ?></h6>
		<h6><label class="col-md-4 col-form-label text-md-left">Ár:</label><?php echo e($service->service_price); ?></h6>
<br>

        <a href="<?php echo e(route("services.edit",$service->id)); ?>">Módosít</a>
    </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>