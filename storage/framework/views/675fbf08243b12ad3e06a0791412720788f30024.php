

<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('uid'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_id'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_rights'));?></th>
        </tr>
        <?php $__currentLoopData = $user_rights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_right): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user_right->id); ?></td>
                <td><?php echo e($user_right->uid); ?></td>
                <td><?php echo e($user_right->customer_id); ?></td>
                <td><?php echo e($user_right->user_rights); ?></td>
                <td><a href="<?php echo e(route("user_rights.show",$user_right->id)); ?>">SHOW</a></td>
                <td><a href="<?php echo e(route("user_rights.edit",$user_right->id)); ?>">EDIT</a></td>
                <td><a href="<?php echo e(route("user_rights.destroy",$user_right->id)); ?>">DELETE</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $user_rights->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>