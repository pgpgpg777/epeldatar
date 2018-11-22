

<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_name'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_description'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_logo_img'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_price'));?></th>
        </tr>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($service->id); ?></td>
                <td><?php echo e($service->service_name); ?></td>
                <td><?php echo e($service->service_description); ?></td>
                <td><?php echo e($service->service_logo_img); ?></td>
                <td><?php echo e($service->service_price); ?></td>
                <td><a href="<?php echo e(route("services.show",$service->id)); ?>">SHOW</a></td>
                <td><a href="<?php echo e(route("services.edit",$service->id)); ?>">EDIT</a></td>
                <td><a href="<?php echo e(route("services.destroy",$service->id)); ?>">DELETE</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $services->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>