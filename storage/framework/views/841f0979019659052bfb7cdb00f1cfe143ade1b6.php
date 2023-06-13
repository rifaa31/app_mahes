<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Produk '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Produk
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-sm-auto ms-auto">
            <div class="hstack gap-2 mb-2">
                <button type="button" class="btn btn-success add-btn"
                    onclick="location.href='<?php echo e(route('product.create')); ?>'"><i class="ri-add-line align-bottom me-1"></i> Add
                    Product</button>
            </div>
        </div>
    </div>


    <!--package-->
    <div>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-info" role="alert">
                <?php echo e(session('success')); ?>

        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-error">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="row mt-4">
        <?php $__currentLoopData = $product['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 mt-2 justify-content-between">
                <div class="card plan-box mb-0 ribbon-box right">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                
                                <h5 class="mb-1 fw-semibold">
                                    <tr>
                                        <td class="name"><?php echo e($item['title']); ?></td>
                                </h5>
                                <p class="text-muted mb-0">Starting From</p>
                            </div>
                        </div>
                        <div class="py-4 text-center">
                            <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">
                                    <tr>
                                        <td class="name"><?php echo e($item['price']); ?></td>
                                </span>
                        </div>
                        <div>
                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <?php echo $item['description']; ?>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class=" d-flex justify-content-between">
                                <form onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');"
                                    action="<?php echo e(route('product.destroy', $item['id'])); ?>" method="POST">
                                    <a href='<?php echo e(route('product.edit', $item['id'])); ?>'
                                        class="btn btn-soft-primary edit-btn"><i></i>
                                        Edit</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-soft-danger clear-btn">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- start add -->

    <!-- end add -->
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/gridjs.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/product/index.blade.php ENDPATH**/ ?>