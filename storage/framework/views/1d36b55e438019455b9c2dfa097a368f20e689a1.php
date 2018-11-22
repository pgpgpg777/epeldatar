

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Felhasználói jogosultság módosítása</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('user_rights.update', $user_right->id)); ?>">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <!--div class="form-group row">
                                <label for="uid" class="col-md-4 col-form-label text-md-right">User</label>

                                <div class="col-md-6">
                                    <select name="uid" id="uid">
                                        @ foreach($users as $user)
                                            <option value="{ {$user->id}}" { {$user_right->uid==$user->id?"selected":""}}>{ {$user->user_firstname}} { {$user->user_lastname}}</option>
                                        @ endforeach
                                    </select>

                                    @ if ($errors->has('uid'))
                                        <span class="invalid-feedback">
                                        <strong>{ { $errors->first('uid') }}</strong>
                                    </span>
                                    @ endif
                                </div>
                            </div-->

                            <div class="form-group row">
                                <label for="customer_id" class="col-md-4 col-form-label text-md-right">Vevő azonosítója</label>

                                <div class="col-md-6">
                                    <select name="customer_id" id="customer_id">
                                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($customer->id); ?>" <?php echo e($user_right->customer_id==$customer->id?"selected":""); ?>><?php echo e($customer->customer_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <!--input id="customer_id" type="text"
                                           class="form-control{ { $errors->has('customer_id') ? ' is-invalid' : '' }}"
                                           name="customer_id" value="{ {  $user_right->customer_id }}" required autofocus-->

                                    <?php if($errors->has('customer_id')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_id')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_rights" class="col-md-4 col-form-label text-md-right">Felhasználói jogosultságok</label>

                                <div class="col-md-6">
                                    <input id="user_rights" type="text"
                                           class="form-control<?php echo e($errors->has('user_rights') ? ' is-invalid' : ''); ?>"
                                           name="user_rights" value="<?php echo e($user_right->user_rights); ?>" required autofocus>

                                    <?php if($errors->has('user_rights')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('user_rights')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Módosítás
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