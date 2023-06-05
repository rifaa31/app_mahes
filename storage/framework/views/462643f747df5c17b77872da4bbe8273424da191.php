<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Pemesanan '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Edit Pemesanan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Edit Pemesanan</h4>
            </div><!-- end card header -->
            <form class="row g-3" method="POST" action="<?php echo e(route('booking.update_action')); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo method_field('PUT'); ?>
                <div class="col-md-4">
                    <label for="customer" class="form-label">Nama calon Pengantin <span class="text-danger">*</span></label>
                    <input name="id" type="hidden" class="form-control" id="id" value="<?php echo e($data['id']); ?>"
                        placeholder="">
                    <input name="customer" type="text" class="form-control" id="customer"
                        value="<?php echo e($data['customer']); ?>">
                </div>
                <div class="col-md-4">
                    <label for="number_phone" class="form-label">Nomor Handphone <span class="text-danger">*</span></label>
                    <input name="number_phone" type="text" class="form-control" id="number_phone"
                        value="<?php echo e($data['number_phone']); ?>">
                </div>
                <div class="col-md-4">
                    <label for="wedding_date" class="form-label">Tanggal Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="wedding_date" type="date" class="form-control" id="wedding_date"
                        value="<?php echo e($data['wedding_date']); ?>">
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <input name="location" type="text" class="form-control" id="location" value="<?php echo e($data['location']); ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="location_wedding" class="form-label">Lokasi Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="location_wedding" type="text" class="form-control" id="location_wedding" value="<?php echo e($data['location_wedding']); ?>">
                </div>
                <div class="form-group row mb-3 col-md-12">
                    <label for="package" class="col-sm-3 col-form-label">Paket Utama <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="package" id="package">
                            <option value="">Package</option>
                            <option value="Legiseu">Legiseu</option>
                            <option value="Niskala">Niskala</option>
                            <option value="Abimana">Abimana</option>
                            <option value="Adiluhung">Adiluhung</option>
                            <option value="Emerald">Emerald</option>
                            <option value="Luxury">Luxury</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="disabledSelect" class="col-sm-3 col-form-label">Additional </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="additional" id="disabledSelect">
                            <option value="">Additional</option>
                            <option value="Saxophone_Biola">Saxophone/Biola</option>
                            <option value="Firework_Confetty">Firework & Confetty</option>
                            <option value="all">Dry Ice, Firework, Confetty & Balon Helium
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="entertainment" class="col-sm-3 col-form-label">Musik Entertainment </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="entertainment" id="entertainment">
                            <option value="">Music Entertainment</option>
                            <option value="Electrone">Electrone</option>
                            <option value="Band/Akustik">Band/Akustik</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="equipment" class="col-sm-3 col-form-label">Equipment</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="equipment" id="equipment">
                            <option value="">Equipment</option>
                            <option value="equipment">Lighting</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="updat" class="col-sm-3 col-form-label">Upacara Adat </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="updat" id="updat">
                            <option value="">Upacara Adat</option>
                            <option value="siraman">Siraman</option>
                            <option value="Mapag calon pangenten">Mapag calon pangenten</option>
                            <option value="Mcltrb">Mapag calon pangenten+Tari Rampak Badaya
                            </option>
                            <option value="mcptrk">Mapag calon pangenten+Tari Rampak Kendang
                            </option>
                            <option value="mcptrkrs">Mapag calon pangenten+tari Rampak Kendang+Rama
                                Shinta</option>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/booking/update.blade.php ENDPATH**/ ?>