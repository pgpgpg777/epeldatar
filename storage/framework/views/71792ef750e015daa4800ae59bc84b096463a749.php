<?php $__env->startSection('content'); ?>
<h2>Felhasználók</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_firstname', 'Keresztnév'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_lastname', 'Vezetéknév'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_work', 'Munkakör'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_email', 'E-mail cím'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_phone', 'Telefonszám'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_profile_img', 'Profilkép'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_status', 'Állapot'));?></th>
            <th colspan="3" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->user_firstname); ?></td>
                <td><?php echo e($user->user_lastname); ?></td>
                <td><?php echo e($user->user_work); ?></td>
                <td><?php echo e($user->user_email); ?></td>
                <td><?php echo e($user->user_phone); ?></td>
                <td><?php echo e($user->user_profile_img); ?></td>
                <td><?php echo e($user->user_status); ?></td>
                <td><a href="<?php echo e(route("users.show",$user->id)); ?>">Mutat</a></td>
                <td><a href="<?php echo e(route("users.edit",$user->id)); ?>">Módosít</a></td>
                <td><a href="<?php echo e(route("users.destroy",$user->id)); ?>">Töröl</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    <?php echo $users->appends(\Request::except('page'))->render(); ?>

    <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>