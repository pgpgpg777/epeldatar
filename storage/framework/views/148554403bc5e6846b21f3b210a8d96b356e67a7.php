<?php $__env->startSection('content'); ?>
<h2>Szolgáltatások</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id', 'Szolgáltatás azonosító'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_name', 'Név'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_description', 'Leírás'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_logo_img', 'Logo'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_price', 'Ár'));?></th>
            <th colspan="3" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($service->id); ?></td>
                <td><?php echo e($service->service_name); ?></td>
                <td><?php echo e($service->service_description); ?></td>
                <td><?php echo e($service->service_logo_img); ?></td>
                <td><?php echo e($service->service_price); ?></td>
                <td><a href="<?php echo e(route("services.show",$service->id)); ?>">Mutat</a></td>
                <td><a href="<?php echo e(route("services.edit",$service->id)); ?>">Módosít</a></td>
                <td><a href="<?php echo e(route("services.destroy",$service->id)); ?>">Töröl</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
    <?php echo $services->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>