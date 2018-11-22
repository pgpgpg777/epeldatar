<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
	<div class="col-sm-6">

        <h4><label class="col-md-4 col-form-label text-md-left">Vezetéknév:</label><?php echo e($user->user_lastname); ?></h4>

        <h4><label class="col-md-4 col-form-label text-md-left">Keresztnév:</label>
            <?php echo e($user->user_firstname); ?></h4>

        <h6><label class="col-md-4 col-form-label text-md-left"> Munkakör: </label><?php echo e($user->user_work); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">E-mail: </label><?php echo e($user->user_email); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Telefonszám: </label><?php echo e($user->user_phone); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Profilkép: </label><?php echo e($user->user_profile_img); ?></h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Utolsó belépés: </label><?php echo e($user->last_login); ?></h6>
<br>
        <a href="<?php echo e(route("users.edit",$user->id)); ?>">Módosítás</a>

    </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>