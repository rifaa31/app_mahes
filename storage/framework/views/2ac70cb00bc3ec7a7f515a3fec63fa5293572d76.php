<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Book Now '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index" class="d-inline-block auth-logo">
                                    <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" alt=""
                                        height="80">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->



                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-6 col-xl-8">
                        <div class="card mt-4">

                            <div class="card-body col-lg-12 mb-2">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary mb-4">Booking Now !</h5>
                                </div>
                                <form class="row g-3" method="POST" action="<?php echo e(route('booking.store')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="col-md-6">
                                        <label for="inputname" class="form-label">Nama calon Pengantin <span
                                                class="text-danger">*</span></label>
                                        <input name="customer" type="text" class="form-control" id="inputname"
                                            placeholder="Nama Calon Pengantin">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputnumber" class="form-label">Nomor Handphone <span
                                                class="text-danger">*</span></label>
                                        <input name="number_phone" type="text" class="form-control" id="inputnumber"
                                            placeholder="Nomor Handphone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputdate" class="form-label">Tanggal Pernikahan <span
                                                class="text-danger">*</span></label>
                                        <input name="wedding_date" type="date" class="form-control" id="inputdate"
                                            placeholder="Tanggal Pernikahan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputnumber" class="form-label">Alamat <span
                                                class="text-danger">*</span></label>
                                        <input name="location" type="text" class="form-control" id="inputnumber"
                                            placeholder="Alamat">
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi Pernikahan<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input name="location_wedding" type="text" class="form-control"
                                                id="inputEmail3" placeholder="Enter Lokasi Pernikahan">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="package" class="col-sm-3 col-form-label">Paket Utama <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="package" id="taginput-choices">
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
                                    <div class="form-group row mb-3">
                                        <label for="package" class="col-sm-3 col-form-label">Additional</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="additional" id="taginput-choices">
                                                <option value="">Additional</option>
                                                <option value="Saxophone_Biola">Saxophone/Biola</option>
                                                <option value="Firework_Confetty">Firework & Confetty</option>
                                                <option value="all">Dry Ice, Firework, Confetty & Balon Helium
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="package" class="col-sm-3 col-form-label">Equipment</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="equipment" id="taginput-choices">
                                                <option value="">Equipment</option>
                                                <option value="equipment">Lighting</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="package" class="col-sm-3 col-form-label">Music
                                            Entertainment</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="additional" id="taginput-choices">
                                                <option value="">Music Entertainment</option>
                                                <option value="Electrone">Electrone</option>
                                                <option value="Band/Akustik">Band/Akustik</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="package" class="col-sm-3 col-form-label">Upacara Adat</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="updat" id="taginput-choices">
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
                                    <div class="col-sm-9 offset-sm-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="file_confirm" type="checkbox"
                                                id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Ceklis untuk melanjutkan Booking
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Static Backdrop -->
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success w-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Booking
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
        <!-- staticBackdrop Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-5">
                        <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="loop"
                            colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                        </lord-icon>

                        <div class="mt-4">
                            <h4 class="mb-3">Silahkan Konfirmasi Pembayaran !</h4>
                            <p class="text-muted mb-4"> Sebagai tanda booking dan lock lakukan down payment sebesar 10%.
                            </p>
                            <div class="hstack gap-2 justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
                                    data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <a href="javascript:void(0);" class="btn btn-success"
                                    onclick="location.href='<?php echo e(url('https://wa.me/+6282316895620')); ?>'"> Payment</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/particles.js/particles.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/particles.app.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/password-addon.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/landing/booknow.blade.php ENDPATH**/ ?>