

<?php $__env->startSection('content'); ?>
    <div class="col-sm-8">
        <h2><?php echo e($customer_accounting->id); ?></h2>
        Customer: <?php echo e($customer_accounting->cid); ?><br>
        Service id:<?php echo e($customer_accounting->service_id); ?><br>
        Start date: <?php echo e($customer_accounting->service_start_date); ?><br>
        End date: <?php echo e($customer_accounting->service_end_date); ?><br>
        Order date: <?php echo e($customer_accounting->order_date); ?><br>
        Price: <?php echo e($customer_accounting->order_price); ?><br>
        Billing period: <?php echo e($customer_accounting->billing_period); ?><br>
        Sum price: <?php echo e($customer_accounting->order_sum_price); ?><br><br>


        <a href="<?php echo e(route("customer_accountings.edit", $customer_accounting->id)); ?>">EDIT</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>