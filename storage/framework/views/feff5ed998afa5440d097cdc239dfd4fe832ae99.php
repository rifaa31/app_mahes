<link href="<?php echo e(asset('assets/libs/summernote/summernote-bs4.min.css')); ?>" rel="stylesheet">

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Produk '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Edit Produk
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-info" role="alert">
                <?php echo e(session('success')); ?>

        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-error" role="alert">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Edit Produk</h4>
            </div><!-- end card header -->
            <form method="post" action="<?php echo e(route('product.update', $product['id'])); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo method_field('PUT'); ?>
                <div class="form-group row mb-2">
                    <label for="title" class="col-sm-3 col-form-label">Nama Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        
                        <input name="title" type="text" class="form-control" id="title"
                            value="<?php echo e($product['title']); ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="price" class="col-sm-3 col-form-label">Harga Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="price" type="number" class="form-control" id="price"
                            value="<?php echo e($product['price']); ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="type" class="col-sm-3 col-form-label">jenis Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="type" id="type">
                            <option value="<?php echo e($product['id']); ?>"><?php echo e($product['type']); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="summernote" class="col-sm-3 col-form-label">Deskripsi Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        
                        <textarea id="summernote" name="description" type="text" class="form-control" style="height: 100px"
                            id="floatingTextarea" value="<?php echo e($product['description']); ?>"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="image" class="col-sm-3 col-form-label">Upload Photo</label>
                    <div class="col-sm-9">
                        <input name="image" type="file" id="image" class="custom-file-input"
                            value="<?php echo e($product['image']); ?>">
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end">Update</button>

                        
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
    <script src="<?php echo e(asset('assets/libs/summernote/summernote-bs4.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/product/edit.blade.php ENDPATH**/ ?>