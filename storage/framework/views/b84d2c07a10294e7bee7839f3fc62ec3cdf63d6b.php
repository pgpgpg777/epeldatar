

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Mod customer accounting</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('customer_accountings.update', $customer_accounting->id)); ?>">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="cid" class="col-md-4 col-form-label text-md-right">Customer</label>

                                <div class="col-md-6">
                                    <select name="cid" id="cid">
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($customer->id); ?>" <?php echo e($customer_accounting->cid==$customer->id?"selected":""); ?>><?php echo e($customer->customer_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <!--input id="cid" type="text"
                                           class="form-control<?php echo e($errors->has('cid') ? ' is-invalid' : ''); ?>"
                                           name="cid" value="<?php echo e($customer_accounting->cid); ?>" required autofocus-->

                                    <?php if($errors->has('cid')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('cid')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_id" class="col-md-4 col-form-label text-md-right">Service</label>

                                <div class="col-md-6">
                                    <select name="service_id" id="service_id">
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($service->id); ?>" <?php echo e($customer_accounting->service_id==$service->service_id?"selected":""); ?>><?php echo e($service->service_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <!--input id="service_id" type="text"
                                           class="form-control<?php echo e($errors->has('service_id') ? ' is-invalid' : ''); ?>"
                                           name="service_id" value="<?php echo e($customer_accounting->service_id); ?>" required autofocus-->

                                    <?php if($errors->has('service_id')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_id')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_start_date" class="col-md-4 col-form-label text-md-right">Start date</label>

                                <div class="col-md-6">
                                    <input id="service_start_date" type="datetime-local"
                                           class="form-control<?php echo e($errors->has('service_start_date') ? ' is-invalid' : ''); ?>"
                                           name="service_start_date" value="<?php echo e($customer_accounting->service_start_date); ?>" required autofocus>

                                    <?php if($errors->has('service_start_date')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_start_date')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_end_date" class="col-md-4 col-form-label text-md-right">End date</label>

                                <div class="col-md-6">
                                    <input id="service_end_date" type="datetime-local"
                                           class="form-control<?php echo e($errors->has('service_end_date') ? ' is-invalid' : ''); ?>"
                                           name="service_end_date" value="<?php echo e($customer_accounting->service_end_date); ?>" required>

                                    <?php if($errors->has('service_end_date')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_end_date')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="order_date" class="col-md-4 col-form-label text-md-right">Order date</label>

                                <div class="col-md-6">
                                    <input id="order_date" type="datetime-local"
                                           class="form-control<?php echo e($errors->has('order_date') ? ' is-invalid' : ''); ?>"
                                           name="order_date" value="<?php echo e($customer_accounting->order_date); ?>" required>

                                    <?php if($errors->has('order_date')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('order_date')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="order_price" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input id="order_price" type="text"
                                           class="form-control<?php echo e($errors->has('order_price') ? ' is-invalid' : ''); ?>"
                                           name="order_price" value="<?php echo e($customer_accounting->order_price); ?>" required>

                                    <?php if($errors->has('order_price')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('order_price')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="billing_period" class="col-md-4 col-form-label text-md-right">Billing period</label>

                                <div class="col-md-6">
                                    <input id="billing_period" type="number"
                                           class="form-control<?php echo e($errors->has('billing_period') ? ' is-invalid' : ''); ?>"
                                           name="billing_period" value="<?php echo e($customer_accounting->billing_period); ?>" required>

                                    <?php if($errors->has('billing_period')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('billing_period')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="order_sum_price" class="col-md-4 col-form-label text-md-right">Sum price</label>

                                <div class="col-md-6">
                                    <input id="order_sum_price" type="text"
                                           class="form-control<?php echo e($errors->has('order_sum_price') ? ' is-invalid' : ''); ?>"
                                           name="order_sum_price" value="<?php echo e($customer_accounting->order_sum_price); ?>" required>

                                    <?php if($errors->has('order_sum_price')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('order_sum_price')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Mod customer accounting
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>