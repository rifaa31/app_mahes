<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Detail '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Detail Pemesanan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        
        <div class="align-items-center d-flex">
            <h4 class="card-title mb-3 flex-grow-1 text-center">Detail Pemesanan</h4>
        </div>
        <!-- end card header -->
        
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Nama Pemesan </div>
                <div class="col-8">: <?php echo e($booking['customer']); ?></div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Alamat </div>
                <div class="col-8">: <?php echo e($booking['location']); ?> </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Tanggal Pernikahan </div>
                <div class="col-8">: <?php echo e($booking['wedding_date']); ?></div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Nomor Handphone </div>
                <div class="col-8">: <?php echo e($booking['number_phone']); ?></div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Lokasi Pernikahan </div>
                <div class="col-8">: <?php echo e($booking['location_wedding']); ?></div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">status </div>
                <div class="col-8">: <?php echo e($booking['status'] == 'waiting' ? 'Down Payment' : 'Waiting'); ?>

                </div>
            </div>
        </div>
        <?php $__currentLoopData = $booking->bookingDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container ">
                <?php
                    $str = '';
                    $name = '';
                    foreach ($b->product as $p) {
                        $name = $p->title;

                        if ($p->type == 'package') {
                            $str = 'Package';
                        } elseif ($p->type == 'additional') {
                            $str = 'Additional';
                        } elseif ($p->type == 'entertainment') {
                            $str = 'Entertainment';
                        } elseif ($p->type == 'upacara_adat') {
                            $str = 'Upacara Adat';
                        } else {
                            $str = 'equipment';
                        }
                    }

                ?>
                <div class="row">
                    <div class="col-2 fw-bold"><?php echo e($str); ?></div>
                    <div class="col-8">:
                        <?php echo e($name); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Total Pembayaran </div>
                <div class="col-8">: <?php echo e($booking['total_payment']); ?></div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">
                    <a href="<?php echo e(route('booking.index')); ?>" class="btn btn-md btn-secondary">Kembali</a>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/booking/detail.blade.php ENDPATH**/ ?>