<?php $__env->startSection('content'); ?>

<h2>Vevők</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_name', 'Vevő neve'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_business', 'Vevő tevékenységi köre'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_description', 'Vevő leírása'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_tax_nbr', 'Vevő adószáma'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_address', 'Vevő címe'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_profile_img', 'Cég logó'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_billing_name', 'Számlázási név'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_billing_address', 'Számlázási cím'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_post_name', 'Postázási név'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_post_address', 'Postázási cím'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_contact_name', 'Kapcsolattartó személy neve'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_contact_phone', 'Kapcsolattartó személy telefonszáma'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_contact_mail', 'Kapcsolattartó személy e-mail címe'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer_contact_mail', 'Vevő jogosultságai'));?></th>
            <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('cruser', 'Létrehozó felhasználó'));?></th>
            <th colspan="3" style="text-align:center;">Műveletek</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->customer_name); ?></td>
                <td><?php echo e($customer->customer_business); ?></td>
                <td><?php echo e($customer->customer_description); ?></td>
                <td><?php echo e($customer->customer_tax_nbr); ?></td>
                <td><?php echo e($customer->customer_address); ?></td>
                <td><?php echo e($customer->customer_profile_img); ?></td>
                <td><?php echo e($customer->customer_billing_name); ?></td>
                <td><?php echo e($customer->customer_billing_address); ?></td>
                <td><?php echo e($customer->customer_post_name); ?></td>
                <td><?php echo e($customer->customer_post_address); ?></td>
                <td><?php echo e($customer->customer_contact_name); ?></td>
                <td><?php echo e($customer->customer_contact_phone); ?></td>
                <td><?php echo e($customer->customer_contact_mail); ?></td>
                <td><?php echo e($customer->cruser); ?></td><td></td>
                <td><a href="<?php echo e(route("customers.show",$customer->id)); ?>">Mutat</a></td>
                <td><a href="<?php echo e(route("customers.edit",$customer->id)); ?>">Módosítás</a></td>
                <td><a href="<?php echo e(route("customers.destroy",$customer->id)); ?>">Töröl</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
    <?php echo $customers->appends(\Request::except('page'))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>