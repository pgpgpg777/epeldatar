<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_firstname'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_lastname'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_work'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_email'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_phone'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_profile_img'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_status'));?></th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->user_firstname); ?></td>
                <td><?php echo e($user->user_lastname); ?></td>
                <td><?php echo e($user->user_work); ?></td>
                <td><?php echo e($user->user_email); ?></td>
                <td><?php echo e($user->user_phone); ?></td>
                <td><?php echo e($user->user_profile_img); ?></td>
                <td><?php echo e($user->user_status); ?></td>
                <td><a href="<?php echo e(route("users.show",$user->id)); ?>">SHOW</a></td>
                <td><a href="<?php echo e(route("users.edit",$user->id)); ?>">EDIT</a></td>
                <td><a href="<?php echo e(route("users.destroy",$user->id)); ?>">DELETE</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $users->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>