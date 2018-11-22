

<?php $__env->startSection('content'); ?>
<h2>Jogosultságok</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id', 'Jogosultság azonosító'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user', 'Felhasználó'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer', 'Vevő'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('user_rights', 'Felhasználói jogosultságok'));?></th>
            <th colspan="3" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $user_rights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_right): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user_right->id); ?></td>
                <td><a href="<?php echo e(route('users.show',$user_right->uid)); ?>"><?php echo e($user_right->user); ?></a></td>
                <td><a href="<?php echo e(route('customers.show',$user_right->customer_id)); ?>"><?php echo e($user_right->customer); ?></a></td>
                <td><?php echo e($user_right->user_rights); ?></td>
                <td><a href="<?php echo e(route('user_rights.show',$user_right->id)); ?>">Mutat</a></td>
                <td><a href="<?php echo e(route('user_rights.edit',$user_right->id)); ?>">Módosít</a></td>
                <td><a href="<?php echo e(route('user_rights.destroy',$user_right->id)); ?>">Töröl</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
    <?php echo $user_rights->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>