

<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('cid'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_id'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_start_date'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_end_date'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_date'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_price'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('billing_period'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_sum_price'));?></th>
        </tr>
        <?php $__currentLoopData = $customer_accountings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accounting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($accounting->cid); ?></td>
                <td><?php echo e($accounting->service_id); ?></td>
                <td><?php echo e($accounting->service_start_date); ?></td>
                <td><?php echo e($accounting->service_end_date); ?></td>
                <td><?php echo e($accounting->order_date); ?></td>
                <td><?php echo e($accounting->order_price); ?></td>
                <td><?php echo e($accounting->billing_period); ?></td>
                <td><?php echo e($accounting->order_sum_price); ?></td>
                <td><a href="<?php echo e(route("customer_accountings.show",$accounting->id)); ?>">SHOW</a></td>
                <td><a href="<?php echo e(route("customer_accountings.edit",$accounting->id)); ?>">EDIT</a></td>
                <td><a href="<?php echo e(route("customer_accountings.destroy",$accounting->id)); ?>">DELETE</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $customer_accountings->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>