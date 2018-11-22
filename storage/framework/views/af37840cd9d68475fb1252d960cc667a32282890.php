

<?php $__env->startSection('content'); ?>

    <div class="col-sm-8">

        <h2 style="color: <?php echo e($user->user_status ? "green"  : "red"); ?>"><?php echo e($user->user_firstname); ?> <?php echo e($user->user_lastname); ?></h2>
        Munkakör: <?php echo e($user->user_work); ?><br>
        E-mail: <?php echo e($user->user_email); ?><br>
        Telefonszám: <?php echo e($user->user_phone); ?><br>
        Profilkép: <?php echo e($user->user_profile_img); ?><br>
        Utolsó belépés: <?php echo e($user->last_login); ?><br><br>

        <a href="<?php echo e(route("users.edit",$user->id)); ?>">EDIT</a>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>