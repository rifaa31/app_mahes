<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Testimoni '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Tambah Testimoni
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Tambah Testimoni</h4>
            </div><!-- end card header -->
            <form method="POST" action="<?php echo e(route('testimoni.store')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row mb-2">
                    <label for="titleid" class="col-sm-3 col-form-label">Nama
                        Pemesan <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="customer_name" type="text" class="form-control" id="titleid"
                            placeholder="Nama Pemesan">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="releasedateid" class="col-sm-3 col-form-label">Pesan <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="massage" type="text" class="form-control" id="releasedateid" placeholder="Pesan">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="gameimageid" class="col-sm-3 col-form-label">Upload Photo <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="image" type="file" id="gameimageid" class="custom-file-input">
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end">Simpan </button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/testimoni/create.blade.php ENDPATH**/ ?>