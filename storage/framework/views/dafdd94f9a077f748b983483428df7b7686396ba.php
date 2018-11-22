

<?php $__env->startSection('content'); ?>
<div class="col-sm-8">
<h2><?php echo e($customer->customer_name); ?></h2>
Tevékenységi kör: <?php echo e($customer->customer_business); ?><br>
Leírás: <?php echo e($customer->customer_description); ?><br>
Adószám: <?php echo e($customer->customer_tax_nbr); ?><br>
Cím: <?php echo e($customer->customer_address); ?><br>
Profilkép: <?php echo e($customer->customer_profile_img); ?><br>
Számlázási név: <?php echo e($customer->customer_billing_name); ?><br>
Számlázási cím: <?php echo e($customer->customer_billing_address); ?><br>
Postázási név: <?php echo e($customer->customer_post_name); ?><br>
Postázási cím: <?php echo e($customer->customer_post_address); ?><br>
Kapcsolattartó neve: <?php echo e($customer->customer_contact_name); ?><br>
Kapcsolattartó telefonszáma: <?php echo e($customer->customer_contact_phone); ?><br>
Kapcsolattartó e-mail címe: <?php echo e($customer->customer_contact_mail); ?><br><br>

<a href="<?php echo e(route("customers.edit",$customer->id)); ?>">EDIT</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>