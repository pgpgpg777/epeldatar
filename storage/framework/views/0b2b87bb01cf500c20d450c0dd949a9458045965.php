<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <div class="col-sm-8">

        <h4><label class="col-md-4 col-form-label text-md-left">Megrendelés azonosító:</label><?php echo e($customer_accounting->id); ?></h4>
        <h6><label class="col-md-4 col-form-label text-md-left">Vevő azonosító:</label><?php echo e($customer_accounting->cid); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Szolgáltatás azonosító:</label><?php echo e($customer_accounting->service_id); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Szolgáltatási időszak kezdete:</label><?php echo e($customer_accounting->service_start_date); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Szolgáltatási időszak vége:</label><?php echo e($customer_accounting->service_end_date); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Megrendelés dátuma:</label><?php echo e($customer_accounting->order_date); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Számlázási egységár:</label><?php echo e($customer_accounting->order_price); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Számlázás rendszeressége:</label><?php echo e($customer_accounting->billing_period); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Megrendelés értéke:</label><?php echo e($customer_accounting->order_sum_price); ?></h6>
<br>

        <a href="<?php echo e(route("customer_accountings.edit", $customer_accounting->id)); ?>">Módosít</a>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>