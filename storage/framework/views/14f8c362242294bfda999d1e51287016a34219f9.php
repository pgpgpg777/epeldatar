

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
	<div class="col-sm-8">
	<img src="/uploads/company_logos/<?php echo e($customer->customer_profile_img); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"><br>
<h4><label class="col-md-4 col-form-label text-md-left">Vevő neve:</label><?php echo e($customer->customer_name); ?></h4>
<h6><label class="col-md-4 col-form-label text-md-left">Tevékenységi kör:</label><?php echo e($customer->customer_business); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Leírás:</label><?php echo e($customer->customer_description); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Adószám:</label><?php echo e($customer->customer_tax_nbr); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Cím:</label><?php echo e($customer->customer_address); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Számlázási név:</label><?php echo e($customer->customer_billing_name); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Számlázási cím:</label><?php echo e($customer->customer_billing_address); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Postázási név:</label><?php echo e($customer->customer_post_name); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Postázási cím:</label><?php echo e($customer->customer_post_address); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Kapcsolattartó személy neve:</label><?php echo e($customer->customer_contact_name); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Kapcsolattartó személy telefonszáma:</label><?php echo e($customer->customer_contact_phone); ?></h6>
<h6><label class="col-md-4 col-form-label text-md-left">Kapcsolatartó személy e-mail címe:</label><?php echo e($customer->customer_contact_mail); ?></h6>
<br>

<a href="<?php echo e(route('customers.edit',$customer->id)); ?>">Módosítás</a>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>