

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Vevő létrehozása</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('customers.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="customer_name" class="col-md-4 col-form-label text-md-right">Vevő neve</label>

                                <div class="col-md-6">
                                    <input id="customer_name" type="text"
                                           class="form-control<?php echo e($errors->has('customer_name') ? ' is-invalid' : ''); ?>"
                                           name="customer_name" value="<?php echo e(old('customer_name')); ?>" required autofocus>

                                    <?php if($errors->has('customer_name')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_business"
                                       class="col-md-4 col-form-label text-md-right">Vevő tevékenységi köre</label>

                                <div class="col-md-6">
                                    <input id="customer_business" type="text"
                                           class="form-control<?php echo e($errors->has('customer_business') ? ' is-invalid' : ''); ?>"
                                           name="customer_business" value="<?php echo e(old('customer_business')); ?>" required
                                           autofocus>

                                    <?php if($errors->has('customer_business')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_business')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_description" class="col-md-4 col-form-label text-md-right">Vevő leírása</label>

                                <div class="col-md-6">
                                    <input id="customer_description" type="text"
                                           class="form-control<?php echo e($errors->has('customer_description') ? ' is-invalid' : ''); ?>"
                                           name="customer_description" value="<?php echo e(old('customer_description')); ?>"
                                           required autofocus>

                                    <?php if($errors->has('customer_description')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_description')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_tax_nbr" class="col-md-4 col-form-label text-md-right">Vevő adószáma</label>

                                <div class="col-md-6">
                                    <input id="customer_tax_nbr" type="text"
                                           class="form-control<?php echo e($errors->has('customer_tax_nbr') ? ' is-invalid' : ''); ?>"
                                           name="customer_tax_nbr" value="<?php echo e(old('customer_tax_nbr')); ?>" required>

                                    <?php if($errors->has('customer_tax_nbr')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_tax_nbr')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_address"
                                       class="col-md-4 col-form-label text-md-right">Vevő címe</label>

                                <div class="col-md-6">
                                    <input id="customer_address" type="text"
                                           class="form-control<?php echo e($errors->has('customer_address') ? ' is-invalid' : ''); ?>"
                                           name="customer_address" value="<?php echo e(old('customer_address')); ?>" required>

                                    <?php if($errors->has('customer_address')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_address')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="customer_billing_name" class="col-md-4 col-form-label text-md-right">Számlázási név</label>

                                <div class="col-md-6">
                                    <input id="customer_billing_name" type="text"
                                           class="form-control<?php echo e($errors->has('customer_billing_name') ? ' is-invalid' : ''); ?>"
                                           name="customer_billing_name" required>

                                    <?php if($errors->has('customer_billing_name')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_billing_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_billing_address" class="col-md-4 col-form-label text-md-right">Számlázási cím</label>

                                <div class="col-md-6">
                                    <input id="customer_billing_address" type="text"
                                           class="form-control<?php echo e($errors->has('customer_billing_address') ? ' is-invalid' : ''); ?>"
                                           name="customer_billing_address" required>

                                    <?php if($errors->has('customer_billing_address')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_billing_address')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_post_name" class="col-md-4 col-form-label text-md-right">Postázási név</label>

                                <div class="col-md-6">
                                    <input id="customer_post_name" type="text"
                                           class="form-control<?php echo e($errors->has('customer_post_name') ? ' is-invalid' : ''); ?>"
                                           name="customer_post_name" required>

                                    <?php if($errors->has('customer_post_name')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_post_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_post_address" class="col-md-4 col-form-label text-md-right">Postázási cím</label>

                                <div class="col-md-6">
                                    <input id="customer_post_address" type="text"
                                           class="form-control<?php echo e($errors->has('customer_post_address') ? ' is-invalid' : ''); ?>"
                                           name="customer_post_address" required>

                                    <?php if($errors->has('customer_post_address')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_post_address')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_contact_name" class="col-md-4 col-form-label text-md-right">Kapcsolattartó személy neve</label>

                                <div class="col-md-6">
                                    <input id="customer_contact_name" type="text"
                                           class="form-control<?php echo e($errors->has('customer_contact_name') ? ' is-invalid' : ''); ?>"
                                           name="customer_contact_name" required>

                                    <?php if($errors->has('customer_contact_name')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_contact_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_contact_phone" class="col-md-4 col-form-label text-md-right">Kapcsolattartó személy telefonszáma</label>

                                <div class="col-md-6">
                                    <input id="customer_contact_phone" type="text"
                                           class="form-control<?php echo e($errors->has('customer_contact_phone') ? ' is-invalid' : ''); ?>"
                                           name="customer_contact_phone" required>

                                    <?php if($errors->has('customer_contact_phone')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_contact_phone')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_contact_mail" class="col-md-4 col-form-label text-md-right">Kapcsolattartó személy e-mail címe</label>

                                <div class="col-md-6">
                                    <input id="customer_contact_mail" type="email"
                                           class="form-control<?php echo e($errors->has('customer_contact_mail') ? ' is-invalid' : ''); ?>"
                                           name="customer_contact_mail" required>

                                    <?php if($errors->has('customer_contact_mail')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_contact_mail')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_rights" class="col-md-4 col-form-label text-md-right">Vevő jogosultságai</label>

                                <div class="col-md-6">
                                    <input id="customer_rights" type="text"
                                           class="form-control<?php echo e($errors->has('customer_rights') ? ' is-invalid' : ''); ?>"
                                           name="customer_rights" required>

                                    <?php if($errors->has('customer_rights')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_rights')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_profile_img" class="col-md-4 col-form-label text-md-right">Cég logó</label>

                             <div class="col-md-6">
                                    <input id="customer_profile_img" type="file"
                                           class="form-control<?php echo e($errors->has('customer_profile_img') ? ' is-invalid' : ''); ?>"
                                           name="customer_profile_img" value="<?php echo e(old('customer_profile_img')); ?>"
                                           required>

                                    <?php if($errors->has('customer_profile_img')): ?>
                                        <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('customer_profile_img')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Vevő létrehozása
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