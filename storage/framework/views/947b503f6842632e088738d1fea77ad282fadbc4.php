<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="user_firstname" class="col-md-4 col-form-label text-md-right">Keresztnév:</label>

                            <div class="col-md-6">
                                <input id="user_firstname" type="text" class="form-control<?php echo e($errors->has('user_firstname') ? ' is-invalid' : ''); ?>" name="user_firstname" value="<?php echo e(old('user_firstname')); ?>" required autofocus>

                                <?php if($errors->has('user_firstname')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_lastname" class="col-md-4 col-form-label text-md-right">Vezetéknév:</label>

                            <div class="col-md-6">
                                <input id="user_lastname" type="text" class="form-control<?php echo e($errors->has('user_lastname') ? ' is-invalid' : ''); ?>" name="user_lastname" value="<?php echo e(old('user_lastname')); ?>" required autofocus>

                                <?php if($errors->has('user_lastname')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_work" class="col-md-4 col-form-label text-md-right">Munkakör:</label>
                    
                            <div class="col-md-6">
                                <input id="user_work" type="text" class="form-control<?php echo e($errors->has('user_work') ? ' is-invalid' : ''); ?>" name="user_work" value="<?php echo e(old('user_work')); ?>" required autofocus>
                    
                                <?php if($errors->has('user_work')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_work')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="user_email" class="col-md-4 col-form-label text-md-right">Email</label>
                    
                            <div class="col-md-6">
                                <input id="user_email" type="email" class="form-control<?php echo e($errors->has('user_email') ? ' is-invalid' : ''); ?>" name="user_email" value="<?php echo e(old('user_email')); ?>" required autofocus>
                    
                                <?php if($errors->has('user_email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_phone" class="col-md-4 col-form-label text-md-right">Telefonszám:</label>

                            <div class="col-md-6">
                                <input id="user_phone" type="text" class="form-control<?php echo e($errors->has('user_phone') ? ' is-invalid' : ''); ?>" name="user_phone" value="<?php echo e(old('user_phone')); ?>" required autofocus>

                                <?php if($errors->has('user_phone')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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

<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>