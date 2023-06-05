<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Product '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/gridjs/gridjs.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Product
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

    <div class="row">
        <!--paket1-->
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            
                            <h5 class="mb-1 fw-semibold">
                                <?php $__currentLoopData = $product['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="name"><?php echo e($item['title']); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </h5>
                            <p class="text-muted mb-0">Starting From</p>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">
                                <?php $__currentLoopData = $product['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="name"><?php echo e($item['price']); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </span>
                    </div>
                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Crew WO <b>4</b> Person
                                        <div><b>1</b> orang Leader</div>
                                        <div><b>2</b> orang Officer</div>
                                        <div><b>1</b> orang Liaison Officer CPW</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Content creator (Story/Reels Instagram)
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Full Handy Talky Communication
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>4</b> Pcs Buku Panduan Pernikahan
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Stiker Nama Tempat Duduk
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Izin Nikah CPW Kepada Orangtua
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Jawaban Izin Nikah Orangtua Kedapa CPW
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Ijab
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Teks Qobul
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-success me-1">
                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        Kordinasi Kesemua Vendor
                                    </div>
                                </div>
                                <div class="collapse mb-3" id="collapse1">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Technical Meeting
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Conffety / Party Popper
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 text-success me-1">
                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            Flasmob
                                        </div>
                                    </div>
                                </div>
                        </ul>
                        <div class="" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                            aria-controls="collapse">
                            <a href="javascript:void(0);" class="card-link link-secondary">Lihat selengkapnya <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-between">
                        <button type="button" class="btn btn-soft-primary edit-btn" data-bs-toggle="modal" id="edit-btn"
                            data-bs-target="#showModal"><i></i>
                            Edit</button>
                        <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal" id="clear-btn"
                            data-bs-target="#showModal"><i></i>
                            Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <!--paket1-->
        <!--paket2-->
        
        <!--paket2-->

        <!--paket3-->
        
        <!--paket3-->
        <!--paket4-->
        
        <!--paket4-->
        <!--paket5-->
        
        <!--paket5-->
        <!--paket6 -->
        
        <!--paket6-->
    </div><!-- end card -->

    <div class="row mt-4">
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            
                            <h5 class="mb-1 fw-semibold">Additionals</h5>

                        </div>
                    </div>

                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">

                                    <div class="flex-grow-1">
                                        <b>Rp600.000 </b> Saxophone/Biola
                                        <div><b>Rp700.000</b> Fireworks,confetty</div>
                                        <div><b>Rp250.000</b> Balon Helium</div>
                                        <div><b>Rp250.000</b> Dry Ice, Firework, Confetty, Balon Helium</div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-between">
                        <button type="button" class="btn btn-soft-primary edit-btn" data-bs-toggle="modal"
                            id="edit-btn" data-bs-target="#showModal"><i></i>
                            Edit</button>
                        <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                            id="clear-btn" data-bs-target="#showModal"><i></i>
                            Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">

                            <h5 class="mb-1 fw-semibold">Eectone</h5>
                            <p class="text-muted mb-0">Total</p>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">4
                                JT</span>
                    </div>

                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">

                                    <div class="flex-grow-1">

                                        <b>2</b> Orang Penyanyi (P&L)
                                        <div><b>Keyboadist</b></div>
                                        <div><b>Saxophone</b></div>
                                        <div><b>Kendang</b></div>
                                        <div><b>Sound Sistem 3000 watt</b></div>
                                        <div><b>Diesel</b></div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-between">
                        <button type="button" class="btn btn-soft-primary edit-btn" data-bs-toggle="modal"
                            id="edit-btn" data-bs-target="#showModal"><i></i>
                            Edit</button>
                        <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                            id="clear-btn" data-bs-target="#showModal"><i></i>
                            Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">

                            <h5 class="mb-1 fw-semibold">Lighting Equipment</h5>
                            <p class="text-muted mb-0">Total</p>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">2,5
                                JT</span>
                    </div>

                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">

                                    <div class="flex-grow-1">
                                        <b>4</b> Beam
                                        <div><b>12</b> Parled</div>
                                        <div><b>4</b> Peresnel</div>
                                        <div><b>1</b> Genset + Bahan Bakar</div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-between">
                        <button type="button" class="btn btn-soft-primary edit-btn" data-bs-toggle="modal"
                            id="edit-btn" data-bs-target="#showModal"><i></i>
                            Edit</button>
                        <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                            id="clear-btn" data-bs-target="#showModal"><i></i>
                            Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-4 justify-content-between">
            <div class="card plan-box mb-0 ribbon-box right">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">

                            <h5 class="mb-1 fw-semibold">Band / Akustik</h5>
                            <p class="text-muted mb-0">Total</p>
                        </div>
                    </div>
                    <div class="py-4 text-center">
                        <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">6
                                JT</span>
                    </div>

                    <div>
                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                            <li>
                                <div class="d-flex">

                                    <div class="flex-grow-1">
                                        <b>2</b> Orang Penyanyi (P&L)
                                        <div><b>Gitar</b></div>
                                        <div><b>Bass</b></div>
                                        <div><b>Drum</b></div>
                                        <div><b>Saxophone / Biola</b></div>
                                        <div><b>Sound Sistem 5000 watt</b></div>
                                        <div><b>Diesel</b></div>
                                        <div><b>Start Performance 10.00-16.00 WIB</b></div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-between">
                        <button type="button" class="btn btn-soft-primary edit-btn" data-bs-toggle="modal"
                            id="edit-btn" data-bs-target="#showModal"><i></i>
                            Edit</button>
                        <button type="button" class="btn btn-soft-danger clear-btn" data-bs-toggle="modal"
                            id="clear-btn" data-bs-target="#showModal"><i></i>
                            Hapus</button>
                    </div>
                </div>
            </div>
        </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/product/index.blade.php ENDPATH**/ ?>