

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Add service</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('services.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="service_name" class="col-md-4 col-form-label text-md-right">Service
                                    name</label>

                                <div class="col-md-6">
                                    <input id="service_name" type="text"
                                           class="form-control<?php echo e($errors->has('service_name') ? ' is-invalid' : ''); ?>"
                                           name="service_name" value="<?php echo e(old('service_name')); ?>" required autofocus>

                                    <?php if($errors->has('service_name')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input id="service_description" type="text"
                                           class="form-control<?php echo e($errors->has('service_description') ? ' is-invalid' : ''); ?>"
                                           name="service_description" value="<?php echo e(old('service_description')); ?>" required autofocus>

                                    <?php if($errors->has('service_description')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_description')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_logo_img" class="col-md-4 col-form-label text-md-right">Logo image</label>

                                <div class="col-md-6">
                                    <input id="service_logo_img" type="text"
                                           class="form-control<?php echo e($errors->has('service_logo_img') ? ' is-invalid' : ''); ?>"
                                           name="service_logo_img" value="<?php echo e(old('service_logo_img')); ?>" required autofocus>

                                    <?php if($errors->has('service_logo_img')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_logo_img')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service_price" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input id="service_price" type="text"
                                           class="form-control<?php echo e($errors->has('service_price') ? ' is-invalid' : ''); ?>"
                                           name="service_price" value="<?php echo e(old('service_price')); ?>" required>

                                    <?php if($errors->has('service_price')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('service_price')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add service
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