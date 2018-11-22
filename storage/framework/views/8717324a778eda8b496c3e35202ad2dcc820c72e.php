<?php $__env->startSection('content'); ?>
<h2>Megrendelések</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('cid', 'Megrendelés azonosító'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_id', 'Szolgáltatás azonosító'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_start_date', 'Szolgáltatási időszak kezdete'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('service_end_date', 'Szolgáltatási időszak vége'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_date', 'Megrendelés dátuma'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_price', 'Számlázási egységár'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('billing_period', 'Számlázás rendszeressége'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('order_sum_price', 'Megrendelés értéke'));?></th>
            <th colspan="3" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
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
                <td><a href="<?php echo e(route("customer_accountings.show",$accounting->id)); ?>">Mutat</a></td>
                <td><a href="<?php echo e(route("customer_accountings.edit",$accounting->id)); ?>">Módosít</a></td>
                <td><a href="<?php echo e(route("customer_accountings.destroy",$accounting->id)); ?>">Töröl</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
    <?php echo $customer_accountings->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>