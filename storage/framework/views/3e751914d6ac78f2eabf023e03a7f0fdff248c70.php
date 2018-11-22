

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
	<div class="col-sm-7">

        <h4><label class="col-md-4 col-form-label text-md-left">Jogosultság #<?php echo e($user_right->id); ?></label></h4>
        <h6><label class="col-md-4 col-form-label text-md-left">Felhasználó:</label><a href="<?php echo e(route('users.show', $user_right->uid)); ?>"><?php echo e($user); ?></a></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Vevő:</label><a href="<?php echo e(route('customers.show', $user_right->customer_id)); ?>"><?php echo e($customer); ?></a></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Jogosultságok:</label><?php echo e($user_right->user_rights); ?></h6>
<br>

        <a href="<?php echo e(route('user_rights.edit',$user_right->id)); ?>">Módosít</a>
    </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>