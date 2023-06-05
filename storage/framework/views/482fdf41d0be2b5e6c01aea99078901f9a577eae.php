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
                        placeholder="Nama Calon Pengantin">
                </div>
                <div class="col-md-4">
                    <label for="number_phone" class="form-label">Nomor Handphone <span class="text-danger">*</span></label>
                    <input name="number_phone" type="text" class="form-control" id="number_phone"
                        placeholder="Nomor Handphone">
                </div>
                <div class="col-md-4">
                    <label for="wedding_date" class="form-label">Tanggal Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="wedding_date" type="date" class="form-control" id="wedding_date"
                        placeholder="Tanggal Pernikahan">
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <input name="location" type="text" class="form-control" id="location" placeholder="Alamat">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="location_wedding" class="form-label">Lokasi Pernikahan <span
                            class="text-danger">*</span></label>
                    <input name="location_wedding" type="text" class="form-control" id="location_wedding"
                        placeholder="Lokasi Pernikahan">
                </div>
                <div class="form-group row mb-3 col-md-12">
                    <label for="package" class="col-sm-3 col-form-label">Paket Utama <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="package" id="package">
                            <option value="">Package</option>
                            <option value="legiseu">Legiseu</option>
                            

                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="disabledSelect" class="col-sm-3 col-form-label">Additional </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="additional" id="disabledSelect">
                            <option value="">Additional</option>
                            <option value="saxophone">Saxophone</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="entertainment" class="col-sm-3 col-form-label">Musik Entertainment </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="entertainment" id="entertainment">
                            <option value="">Music Entertainment</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="equipment" class="col-sm-3 col-form-label">Equipment</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="equipment" id="equipment">
                            <option value="">Equipment</option>
                            <option value="lighthing">lighthing</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="updat" class="col-sm-3 col-form-label">Upacara Adat </span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="updat" id="updat">
                            <option value="">Upacara Adat</option>
                            <option value="siraman">Siraman </option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-sm-9 offset-sm-3">
                    <div class="form-check">
                        <input class="form-check-input" name="file_confirm" type="checkbox" id="file_confirm">
                        <label class="form-check-label" for="file_confirm">
                            Down Payment
                        </label>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/booking/create.blade.php ENDPATH**/ ?>