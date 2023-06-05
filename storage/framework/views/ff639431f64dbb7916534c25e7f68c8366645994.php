<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Akun '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Tambah Akun
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?> </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Tambah Akun</h4>
            </div><!-- end card header -->
            <form method="POST" action="<?php echo e(route('user.store')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row mb-2">
                    <label for="name" class="col-sm-3 col-form-label">Nama Pengguna <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="name"
                            placeholder="Nama Pengguna">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="password" class="col-sm-3 col-form-label">Password <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                            type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="role" class="col-sm-3 col-form-label">Role <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="role" id="role">
                            <option value="">Role</option>
                            <option value="owner">Owner</option>
                            <option value="bendahara">Bendahara</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end"> Simpan </button>
                    </div>
                </div>
            </form>
            <!--end col-->
        </div>
    </div>
    <!--end col-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/user/create.blade.php ENDPATH**/ ?>