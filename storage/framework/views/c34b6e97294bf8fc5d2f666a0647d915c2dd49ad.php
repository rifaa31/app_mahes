<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Pemesanan '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Pemesanan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm-3">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <a href='<?php echo e(route('booking.booking_pdf')); ?>' class="btn btn-soft-primary" target="_blank"><i
                                        class="bx bx-printer"></i>
                                    Print PDF</a>
                                <button type="button" class="btn btn-success add-btn"
                                    onclick="location.href='<?php echo e(route('booking.create')); ?>'"><i
                                        class="ri-add-line align-bottom me-1"></i> Tambah Pemesanan</button>
                            </div>
                        </div>
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-info" role="alert">
                                <?php echo e(session('success')); ?>

                        <?php endif; ?>
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(session('message')); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card">
                            <table class="table align-middle" id="customerTable">

                                <thead class="table-light">
                                    <tr>
                                        <th data-sort="">No</th>
                                        <th data-sort="customer">Nama Pemesan</th>
                                        <th data-sort="location">Alamat</th>
                                        <th data-sort="wedding_date">Tanggal Pernikahan</th>
                                        <th data-sort="number_phone">Nomor Handphone</th>
                                        <th data-sort="location_wedding">Lokasi Pernikahan</th>
                                        <th data-sort="status">Status</th>
                                        <th class="text-center" ldata-sort="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $booking['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td class="customer"><?php echo e($item['customer']); ?></td>
                                            <td class="location"><?php echo e($item['location']); ?></td>
                                            <td class="wedding_date"><?php echo e($item['wedding_date']); ?></td>
                                            <td class="number_phone"><?php echo e($item['number_phone']); ?></td>
                                            <td class="location_wedding"><?php echo e($item['location_wedding']); ?></td>
                                            <td class="status"><?php echo e($item['status']); ?></td>
                                            <td class="action text-center">
                                                <button class="btn btn-sm btn-info">Konfirmasi</button>
                                                <button type="button" class="btn btn-sm btn-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#showdetail"> <i
                                                        class=" ri-file-text-line align-bottom"></i></button>
                                                <a href='<?php echo e(route('booking.update', $item['id'])); ?>'
                                                    class="btn btn-sm btn-primary"><i
                                                        class="ri-pencil-line align-bottom"></i></a>
                                                <a onclick="deleteTesti(<?php echo e($item['id']); ?>)" class="btn btn-sm btn-danger"
                                                    href="#"><i class="ri-delete-bin-line"></i></a>
                                            </td>
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

                                    <?php $__currentLoopData = $booking['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <div class="modal fade" id="showdetail" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->

                    <!-- Modal -->
                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" id="deleteRecord-close"
                                        data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                </div>
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                        colors="primary:#25a0e2,secondary:#00bd9d" style="width:90px;height:90px">
                                    </lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4 class="fs-semibold">You are about to delete a Booking?</h4>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button class="btn btn-link link-primary fw-medium text-decoration-none"
                                                data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>
                                                Close</button>
                                            <button class="btn btn-primary" id="delete-record">Yes,
                                                Delete It!!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
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
        <script>
            function deleteTesti(id) {
                var x = confirm('Apakah anda yakin akan menghapus data ini ?')
                if (x) {
                    const formData = new FormData()
                    formData.append('_method', 'DELETE')
                    fetch("<?php echo e(route('booking.destroy', '')); ?>" + `/${id}`, {
                        method: "POST",
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        }
                    }).then(res => res.json()).then(
                        res => {
                            console.log(res)
                            if (res.code == 200) {

                                location.reload()
                            } else {
                                alert(res.message)
                            }
                        }
                    )
                }
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/booking/index.blade.php ENDPATH**/ ?>