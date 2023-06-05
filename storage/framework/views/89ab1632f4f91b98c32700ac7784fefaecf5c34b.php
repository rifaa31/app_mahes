<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Pemesanan '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Tambah Pemesanan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Tambah Pemesanan</h4>
            </div><!-- end card header -->
            <form class="row g-3" method="POST" action="<?php echo e(route('booking.store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="col-md-4">
                    <label for="customer" class="form-label">Nama calon Pengantin <span class="text-danger">*</span></label>
                    <input name="customer" type="text" class="form-control" id="customer"
                        placeholder="Nama Calon Pengantin"
                        value="<?php echo e(isset($booking->customer) ? $booking->customer : ''); ?>">
                </div>
                <div class="col-md-4">
                    <label for="number_phone" class="form-label">Nomor Handphone <span class="text-danger">*</span></label>
                    <input name="number_phone" type="text" class="form-control" id="number_phone"
                        placeholder="Nomor Handphone"
                        value="<?php echo e(isset($booking->number_phone) ? $booking->number_phone : ''); ?>">
                </div>
                <div class="col-md-4">
                    <label for="wedding_date" class="form-label">Tanggal Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="wedding_date" type="date" class="form-control" id="wedding_date"
                        placeholder="Tanggal Pernikahan"
                        value="<?php echo e(isset($booking->wedding_date) ? date('Y-m-d', strtotime($booking->wedding_date)) : ''); ?>">
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <input name="location" type="text" class="form-control" id="location"
                        placeholder=" Lokasi Pernikahan " value="<?php echo e(isset($booking->location) ? $booking->location : ''); ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="location_wedding" class="form-label">Lokasi Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="location_wedding" type="text" class="form-control" id="location_wedding"
                        placeholder=" Lokasi Pernikahan "
                        value="<?php echo e(isset($booking->location_wedding) ? $booking->location_wedding : ''); ?>">
                </div>
                <div class="form-group row mb-3 col-md-12">
                    <label for="package" class="col-sm-3 col-form-label">Paket Utama <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="product_id[]" id="package"
                            oninvalid="this.setCustomValidity('Pilih minimal 1 Package')"
                            oninput="this.setCustomValidity('')" required>
                            <option value="">Pilih Package</option>
                            <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>#<?php echo e($item['price']); ?>"><?php echo e($item['title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="disabledSelect" class="col-sm-3 col-form-label">Additional </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="product_id[]" id="additional">
                            <option value="">Pilih Additional</option>
                            <?php $__currentLoopData = $additional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>#<?php echo e($item['price']); ?>"><?php echo e($item['title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="entertainment" class="col-sm-3 col-form-label">Musik Entertainment </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="product_id[]" id="entertainment">
                            <option value="">Music Entertainment</option>
                            <?php $__currentLoopData = $entertainment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>#<?php echo e($item['price']); ?>"><?php echo e($item['title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="equipment" class="col-sm-3 col-form-label">Equipment</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="product_id[]" id="entertainment">
                            <option value="">Music Entertainment</option>
                            <?php $__currentLoopData = $equipment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>#<?php echo e($item['price']); ?>"><?php echo e($item['title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="updat" class="col-sm-3 col-form-label">Upacara Adat </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="product_id[]" id="upacara_adat">
                            <option value="">Pilih Upacara Adat</option>
                            <?php $__currentLoopData = $upacara_adat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['id']); ?>#<?php echo e($item['price']); ?>"><?php echo e($item['title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end"> Simpan </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end col-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php if($id != ''): ?>
        <script>
            const id = <?php echo e($id); ?>

            window.addEventListener('DOMContentLoaded', function() {

                fetch('<?php echo e(route('booking.getBookingById', '')); ?>' + `/${id}`)
                    .then(response => response.json())
                    .then(res => {
                        document.getElementById('customer').value = res.data.customer;
                        document.getElementById('location').value = res.data.location;
                        document.getElementById('wedding_date').value = res.data.wedding_date;
                        document.getElementById('number_phone').value = res.data.number_phone;
                        document.getElementById('location_wedding').value = res.data.location;
                        document.getElementById('id').value = res.data.id;
                        res.data.booking_detail.forEach(element => {


                            if (element.product.type == 'package') {
                                document.getElementById('package').value = element.product.id + '#' +
                                    element.product.price;
                            }
                            if (element.product.type == 'additional') {
                                document.getElementById('additional').value = element.product.id + '#' +
                                    element.product.price;
                            }
                            if (element.product.type == 'entertainment') {
                                document.getElementById('entertainment').value = element.product.id + '#' +
                                    element.product.price;
                            }
                            if (element.product.type == 'equipment') {
                                document.getElementById('equipment').value = element.product.id + '#' +
                                    element.product.price;
                            }
                            if (element.product.type == 'upacara_adat') {
                                document.getElementById('upacara_adat').value = element.product.id + '#' +
                                    element.product.price;
                            }
                        });
                    })
            })
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/booking/create.blade.php ENDPATH**/ ?>