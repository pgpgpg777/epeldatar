

<?php $__env->startSection('content'); ?>
    <div class="col-sm-8">

        <h2>User right #<?php echo e($user_right->id); ?></h2>
        User: <?php echo e($user_right->uid); ?><br>
        Customer: <?php echo e($user_right->customer_id); ?><br>
        User_rights: <?php echo e($user_right->user_rights); ?><br><br>

        <a href="<?php echo e(route("user_rights.edit",$user_right->id)); ?>">EDIT</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>