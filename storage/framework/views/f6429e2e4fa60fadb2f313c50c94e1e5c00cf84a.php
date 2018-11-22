

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('users.update', $user->id)); ?>">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="user_firstname" class="col-md-4 col-form-label text-md-right">First
                                    name</label>

                                <div class="col-md-6">
                                    <input id="user_firstname" type="text"
                                           class="form-control<?php echo e($errors->has('user_firstname') ? ' is-invalid' : ''); ?>"
                                           name="user_firstname" value="<?php echo e($user->user_firstname); ?>" required autofocus>

                                    <?php if($errors->has('user_firstname')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_firstname')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_lastname" class="col-md-4 col-form-label text-md-right">Last
                                    name</label>

                                <div class="col-md-6">
                                    <input id="user_lastname" type="text"
                                           class="form-control<?php echo e($errors->has('user_lastname') ? ' is-invalid' : ''); ?>"
                                           name="user_lastname" value="<?php echo e($user->user_lastname); ?>" required autofocus>

                                    <?php if($errors->has('user_lastname')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_lastname')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_work" class="col-md-4 col-form-label text-md-right">Job</label>

                                <div class="col-md-6">
                                    <input id="user_work" type="text"
                                           class="form-control<?php echo e($errors->has('user_work') ? ' is-invalid' : ''); ?>"
                                           name="user_work" value="<?php echo e($user->user_work); ?>" required autofocus>

                                    <?php if($errors->has('user_work')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_work')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_email" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>

                                <div class="col-md-6">
                                    <input id="user_email" type="email"
                                           class="form-control<?php echo e($errors->has('user_email') ? ' is-invalid' : ''); ?>"
                                           name="user_email" value="<?php echo e($user->user_email); ?>" required>

                                    <?php if($errors->has('user_email')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="user_phone" class="col-md-4 col-form-label text-md-right">Phone
                                    Number</label>

                                <div class="col-md-6">
                                    <input id="user_phone" type="text"
                                           class="form-control<?php echo e($errors->has('user_phone') ? ' is-invalid' : ''); ?>"
                                           name="user_phone" value="<?php echo e($user->user_phone); ?>" required>

                                    <?php if($errors->has('user_phone')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_phone')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!--div class="form-group row">
                                <label for="user_profile_img" class="col-md-4 col-form-label text-md-right">Profile
                                    Image</label>

                                <div class="col-md-6">
                                    <input id="user_profile_img" type="text"
                                           class="form-control{ { $errors->has('user_profile_img') ? ' is-invalid' : '' }}"
                                           name="user_profile_img" value="{ { $user->user_profile_img }}" required>

                                    @ if ($errors->has('user_profile_img'))
                                        <span class="invalid-feedback">
                                        <strong>{ { $errors->first('user_profile_img') }}</strong>
                                    </span>
                                    @ endif
                                </div>
                            </div-->

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                           name="password" value="<?php echo e($user->password); ?>">

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Mod user
                                    </button>
                                </div>
                            </div>
                       
                            <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>