<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Jadwal '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/jsvectormap/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('title'); ?>
            Jadwal
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-header p-0 border-0 bg-soft-light">
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span>
                                            </h5>
                                            <p class="text-muted mb-0">Orders</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k
                                            </h5>
                                            <p class="text-muted mb-0">Earnings</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="367">0</span>
                                            </h5>
                                            <p class="text-muted mb-0">Refunds</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                            <h5 class="mb-1 text-primary"><span class="counter-value"
                                                    data-target="18.92">0</span>%</h5>
                                            <p class="text-muted mb-0">Conversation Ratio</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body p-0 pb-2">
                                <div class="w-100">
                                    <div id="customer_impression_charts"
                                        data-colors='["--vz-light", "--vz-primary", "--vz-info"]' class="apex-charts"
                                        dir="ltr"></div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Tambah
                                Jadwal Baru</button>

                            <div id="external-events">
                                <br>
                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                <div class="external-event fc-event bg-soft-success text-success"
                                    data-class="bg-soft-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                                    Planning
                                </div>
                                <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                </div>
                                <div class="external-event fc-event bg-soft-warning text-warning"
                                    data-class="bg-soft-warning">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                                    Reports
                                </div>
                                <div class="external-event fc-event bg-soft-danger text-danger" data-class="bg-soft-danger">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                    New theme
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xl-9">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!--end row-->

            <div style='clear:both'></div>

            <!-- Add New Event MODAL -->

            <!-- end modal-->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Tambah
                                Jadwal Baru</button>

                            <div id="external-events">
                                <br>
                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                <div class="external-event fc-event bg-soft-success text-success"
                                    data-class="bg-soft-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                                    Planning
                                </div>
                                <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                </div>
                                <div class="external-event fc-event bg-soft-warning text-warning"
                                    data-class="bg-soft-warning">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                                    Reports
                                </div>
                                <div class="external-event fc-event bg-soft-danger text-danger"
                                    data-class="bg-soft-danger">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                    New theme
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xl-9">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!--end row-->

            <div style='clear:both'></div>

            <!-- Add New Event MODAL -->

            <!-- end modal-->
        </div>
    </div> <!-- end row-->
    <div class="modal fade" id="event-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="modal-title">Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn"
                                data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                        </div>
                        <div class="event-details">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-time-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> -
                                        <span id="event-timepicker2-tag"></span>
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row event-form">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="form-select d-none" name="category" id="event-category" required>
                                        <option value="bg-soft-danger">Danger</option>
                                        <option value="bg-soft-success">Success</option>
                                        <option value="bg-soft-primary">Primary</option>
                                        <option value="bg-soft-info">Info</option>
                                        <option value="bg-soft-dark">Dark</option>
                                        <option value="bg-soft-warning">Warning</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid event category</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Event Name</label>
                                    <input class="form-control d-none" placeholder="Enter event name" type="text"
                                        name="title" id="event-title" required value="" />
                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Event Date</label>
                                    <div class="input-group d-none">
                                        <input type="text" id="event-start-date"
                                            class="form-control flatpickr flatpickr-input" placeholder="Select date"
                                            readonly required>
                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12" id="event-time">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Start Time</label>
                                            <div class="input-group d-none">
                                                <input id="timepicker1" type="text"
                                                    class="form-control flatpickr flatpickr-input"
                                                    placeholder="Select start time" readonly>
                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">End Time</label>
                                            <div class="input-group d-none">
                                                <input id="timepicker2" type="text"
                                                    class="form-control flatpickr flatpickr-input"
                                                    placeholder="Select end time" readonly>
                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="event-location">Location</label>
                                    <div>
                                        <input type="text" class="form-control d-none" name="event-location"
                                            id="event-location" placeholder="Event location">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <input type="hidden" id="eventid" name="eventid" value="" />
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3"
                                        spellcheck="false"></textarea>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i
                                    class="ri-close-line align-bottom"></i> Delete</button>
                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div> <!-- end modal-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.js')); ?>"></script>
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/fullcalendar/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/calendar.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\maheswari-app\resources\views/pages/schedule/index.blade.php ENDPATH**/ ?>