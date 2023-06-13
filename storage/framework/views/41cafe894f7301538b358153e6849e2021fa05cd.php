<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Testimoni '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Testimoni
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?>

    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">
                    <div class="row g-4 align-items-center">

                        <div class="col-sm-9">
                            <form action="<?php echo e(route('testimoni.index')); ?>" method="postuser">
                                <div class="hstack gap-2">
                                    <input type="search" name="search" class="form-control" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <button type="button" class="btn btn-success add-btn"
                                    onclick="location.href='<?php echo e(route('testimoni.create')); ?>'"><i
                                        class="ri-add-line align-bottom me-1"></i> Tambah Testimoni</button>
                            </div>
                        </div>
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-info" role="alert">
                                <?php echo e(session('success')); ?> </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card-body">
                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle" id="testimoniTable">
                                <thead class="table-light">
                                    <tr>
                                        <th data-sort="">No</th>
                                        <th data-sort="cutomer_name">Nama</th>
                                        <th data-sort="customer_date">Tanggal</th>
                                        <th data-sort="massaage">Pesan</th>
                                        <th class="text-center" data-sort="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $testimoni['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td class="cutomer_name"><?php echo e($item['customer_name']); ?></td>
                                            <td class="customer_date"><?php echo e($item['customer_date']); ?></td>
                                            <td class="massaage"><?php echo e($item['massage']); ?></td>
                                            <td class="action text-center">
                                                <form
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');"
                                                    action="<?php echo e(route('testimoni.destroy', $item['id'])); ?>" method="POST">
                                                    <a href="<?php echo e(route('testimoni.edit', $item['id'])); ?>"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="ri-pencil-line align-bottom"></i></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </form>

                                                

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ leads We
                                        did not find any
                                        leads for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">

                                    <?php $__currentLoopData = $testimoni['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $label = $item['label'] == 'pagination.previous' ? 'Previous' : ($item['label'] == 'pagination.next' ? 'Next' : $item['label']);
                                        ?>

                                        <li class="page-item"><a
                                                class="page-link <?php echo e($item['active'] == true ? 'active' : ''); ?>"
                                                href="<?php echo e($item['url']); ?>"><?php echo e($label); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/list.js/list.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/crm-leads.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/testimoni/index.blade.php ENDPATH**/ ?>