<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('landing '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(URL::asset('/index')); ?>">
                        <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" class="card-logo card-logo-dark"
                            alt="logo dark" height="50">
                        <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" class="card-logo card-logo-light"
                            alt="logo light" height="50">
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item">
                                <a class="nav-link fs-15 active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#package">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#additional">Additional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#testimoni">Testimoni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#team">Wedding Consultant</a>
                            </li>

                        </ul>
                        
                    </div>

                </div>
            </nav>
            <div class="bg-overlay bg-overlay-pattern"></div>
            <!-- end navbar -->
            <!-- start hero section -->
            <section class="section nft-hero" id="home">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center">
                                <h1 class="display-4 fw-medium mb-4 lh-base text-white">Wujudkan Impian Pernikahanmu bersama
                                    <span class="text-success">Maheswari Enterprise</span>
                                </h1>
                                <p class="lead text-white-50 lh-base mb-4 pb-2">Memberikan jasa pelayanan/ Wedding Organizer
                                    terbaik dan
                                    terstruktur. Sudah berpengalaman dan profesional dalam menyelenggarakan Event
                                    Pernikahan baik Indoor atau Outdoor, Pernikahan Tradisional, Nasional dan Internasional
                                    yang kami kemas sesuai dengan permintaan dan pengimplementasian yang Epic.</p>

                                <div class="hstack gap-2 justify-content-center">
                                    <a href='<?php echo e(route('landing.select')); ?>' class="btn btn-primary">Book Now <i
                                            class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    <a href="#package" class="btn btn-danger">View Package <i
                                            class="ri-eye-line align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end hero section -->

            <!-- start hero section -->
            

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold lh-base">Kenapa Harus Maheswari ?</h1>
                                <p class="text-muted">Kami Memberikan Pelayanan Terbaik, Kami Bekerja Sesuai Dengan
                                    Permintaan & Kebutuhan, Kami Bekerja Dengan Penuh Rasa Tanggung Jawab, Kami Bantu
                                    Untuk Mewujudkan Your Wedding Dream, We are Young, Smart & Integrity</p>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="swiper effect-coverflow-swiper rounded pb-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss1.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss2.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss3.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss4.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss5.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss6.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(URL::asset('assets/images/demos/mhss7.jpeg')); ?>" alt=""
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Creative Thinking</h5>
                                    <p class="text-muted my-3 ff-secondary">Ide gagsan kreatif yang kami suguhkan
                                        akan
                                        menjadi hal yang tak terlupakan dalam momen sakral sekali seumur hidup.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-palette-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Young</h5>
                                    <p class="text-muted my-3 ff-secondary">Crew Muda dan Semangat yang akan terjun
                                        langsung
                                        membawa acara berkesan di era millenial. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-briefcase-5-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Super Crew</h5>
                                    <p class="text-muted my-3 ff-secondary">Koordinasi dan Konsolidasi yang
                                        kontinyu
                                        antara
                                        Team dan Pihak Terkait membuat acara terintegrasi dengan baik. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-lightbulb-flash-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Innovate Ideas</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami terus berupaya mengikuti trend
                                        masa
                                        kini
                                        dan selera pasar tanpa mengurangi nilai-nilai luhur pernikahan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-settings-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Problem Solving</h5>
                                    <p class="text-muted my-3 ff-secondary">Dengan jam Terbang dan Wawasan membuat
                                        kami
                                        handal dan berpengalaman dalam menghadapi kendala dengan strategi Plan B dan
                                        Plan C.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
        </div>
        <!-- end container -->
        </section>
        <!-- end services -->

        <!-- start plan -->
        <section class="section bg-light" id="categories">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 fw-semibold">DOKUMENTASI <span class="text-danger">& GALERI</span></h1>
                            </div>
                            <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium active" type="button"
                                        data-filter="all">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="artwork">WO</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="music">Make
                                        Up</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button"
                                        data-filter="games">Dekorasi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button"
                                        data-filter="crypto-card">Entertainment
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-medium" type="button" data-filter="3d-style">
                                        lainnya</button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/img-03.jpg')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                
                            </div>
                            <div class="card-body">
                                
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item music crypto-card games">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/img-02.jpg')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music games">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/gif/img-4.gif')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/img-01.jpg')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item games music 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/img-05.jpg')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-item artwork music crypto-card">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="<?php echo e(URL::asset('assets/images/nft/img-06.jpg')); ?>" alt=""
                                    class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-1">Photography</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
            </div><!-- end container -->
        </section>
        <!-- end plan -->

        <section class="section bg-white" id="package">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="mb-3 fw-semibold">ALL PACKAGE <span class="text-danger">MAHESWARI</span></h1>
                            <p class="text-muted mb-4">Professional Wedding Planner & Services</p>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row gy-4">
                        <?php $__currentLoopData = $all_package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">
                                    <div class="card-body p-4 m-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold"><?php echo e($item['title']); ?></h5>
                                                <p class="text-muted mb-0">For Startup</p>
                                            </div>
                                            
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><span
                                                    class="ff-secondary fw-bold"><?php echo e(number_format($item['price'], 0, '', '.')); ?></span>
                                            </h1>
                                        </div>

                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-<?php echo e($item['id']); ?>" aria-expanded="false"
                                                        aria-controls="flush-<?php echo e($item['id']); ?>">
                                                        Detail Package
                                                    </button>
                                                </h2>
                                                <div id="flush-<?php echo e($item['id']); ?>" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body"><?php echo $item['description']; ?></div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='<?php echo e(route('landing.booknow')); ?>'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!--end row-->
                </div>
                <!-- end container -->
        </section>

        <section class="section bg-light" id="">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-3">
                            <h2 class="mb-3 fw-semibold">WEDDING ORGANIZER <span class="text-danger">SERVICES ONLY</span>
                            </h2>
                            <p class="text-muted mb-4">Pilihlah Paket yang sesuai dengan Kebutuhan Kamu</p>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row gy-4">
                        <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">
                                    <div class="card-body p-4 m-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold"><?php echo e($item['title']); ?></h5>
                                                <p class="text-muted mb-0">For Startup</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><span
                                                    class="ff-secondary fw-bold"><?php echo e(number_format($item['price'], 0, '', '.')); ?></span>
                                            </h1>
                                        </div>

                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-<?php echo e($item['id']); ?>" aria-expanded="false"
                                                        aria-controls="flush-<?php echo e($item['id']); ?>">
                                                        Detail Package
                                                    </button>
                                                </h2>
                                                <div id="flush-<?php echo e($item['id']); ?>" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body"><?php echo $item['description']; ?></div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='<?php echo e(route('landing.booknow')); ?>'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!--end row-->
                </div>
                <!-- end container -->
        </section>

        <!-- start add -->
        <section class="section" id="additional">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-muted">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 fw-semibold">ADD<span class="text-danger">ITIONAL</span>
                                </h1>
                                <p class="text-muted mb-4">Merupakan Paket Tambahan Jika Diperlukan</p>
                            </div>
                            <div class="row">
                                <?php $__currentLoopData = $additional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card">
                                            <img class="card-img-top img-fluid"
                                                src="<?php echo e(asset('storage/images/' . $item->image)); ?>"
                                                class="img-fluid rounded-start" alt="Card image">
                                            
                                            <div class="card-body">
                                                <h4 class="card-title mb-2"><?php echo e($item['title']); ?></h4>
                                                <p class="card-text mb-0"><?php echo e(number_format($item['price'], 0, '', '.')); ?>

                                                </p>
                                            </div>
                                            
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div><!-- end row -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="col-lg-12">
                        <div class="text-muted">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 fw-semibold">MUSIC <span class="text-danger">ENTERTAINMENT</span></h1>
                                <h3 class="mb-3 fw-semibold"> </h3>
                            </div>
                            <div class="row ">
                                <?php $__currentLoopData = $entertainment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="rounded-start img-fluid h-100 object-cover"
                                                    src="<?php echo e(asset('storage/images/' . $item->image)); ?>"
                                                    class="img-fluid rounded-start" alt="Card image">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo e($item['title']); ?></h5>
                                                    <p class="card-text"><?php echo e(number_format($item['price'], 0, '', '.')); ?>

                                                    </p>
                                                    <p class="card-text"><?php echo $item['description']; ?></p>
                                                    <p class="card-text"><small class="text-body-secondary">Start
                                                            Performance
                                                            10.00-16.00 WIB</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div><!-- end row -->
                        </div><!-- end row -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end add -->

        <!-- start upacara adat -->
        <section class="section bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row gallery-wrapper">
                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"
                                data-category="designing development">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>"
                                            title="">
                                            <img class="gallery-img img-fluid mx-auto"
                                                src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"
                                data-category="designing development">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>"
                                            title="">
                                            <img class="gallery-img img-fluid mx-auto"
                                                src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"
                                data-category="designing development">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>"
                                            title="">
                                            <img class="gallery-img img-fluid mx-auto"
                                                src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-muted">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 fw-semibold">UPACARA <span class="text-danger">ADAT</span></h1>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $upacara_adat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title"><?php echo e($item['title']); ?></h6>
                                    <p class="card-subtitle text-muted mb-0">
                                        <?php echo e(number_format($item['price'], 0, '', '.')); ?></p>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted">
                                        <?php echo $item['description']; ?>

                                    </p>
                                </div>
                            </div>
                        </div><!-- end col -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div><!-- end row -->
        </section>
        <!-- end upacara adat -->

        <!-- start testimonial -->
        <section class="section bg-primary opacity-75" id="testimoni">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-14">
                        <div class="text-center">
                            <div>
                                <i class="ri-double-quotes-l text-white display-5"></i>
                            </div>
                            <h3 class="text-white mb-5">TESTIMONI </h3>
                            

                            <!-- Swiper -->
                            <div class="swiper vertical-swiper rounded mb-8" style="height:180px;">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $testimoni['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-14">
                                                    <div class="text-white">
                                                        <p class="fs-20 ff-secondary mb-4"><?php echo e($item['massage']); ?>

                                                        </p>

                                                        <div>
                                                            <h5 class="text-white"><?php echo e($item['customer_name']); ?>

                                                            </h5>
                                                            <p><?php echo e($item['customer_date']); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        <!-- start team -->
        <section class="section bg-soft-primary" id="team">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 fw-semibold">WEDDING <span class="text-danger">CONSULTANT</span></h1>
                            <p class="text-muted mb-4">Kami Siap Memberikan Jasa Konsultasi Mengenai Konsep
                                Pernikahan Yang Sesuai Dengan Impian Pernikahmu.</p>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar1.jpg')); ?>" alt=""
                                            class="img-fluid rounded-circle">
                                        <a href='<?php echo e(url('https://wa.me/+6288223453846')); ?>'
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-chat-3-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                            class="text-body">Dedi
                                            wardatul Q</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Super Crew</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar2.jpg')); ?>" alt=""
                                            class="img-fluid rounded-circle">
                                        <a href='<?php echo e(url('https://wa.me/+6289519086447')); ?>'
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-chat-3-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                            class="text-body">Izzal
                                            Tufik N</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Super Crew</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar3.jpg')); ?>" alt=""
                                            class="img-fluid rounded-circle">
                                        <a href='<?php echo e(url('https://wa.me/+6281288605259')); ?>'
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-chat-3-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                            class="text-body">Rifa
                                            Nurfalah</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Super Crew</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar4.jpg')); ?>" alt=""
                                            class="img-fluid rounded-circle">
                                        <a href='<?php echo e(url('https://wa.me/+628982862013')); ?>'
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-chat-3-fill align-bottom"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                            class="text-body">Didit
                                            Hardiyanto</a></h5>
                                    <p class="text-muted mb-0 ff-secondary">Super Crew</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
        </section>
        <!-- end team -->

        <!-- start contact -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 fw-semibold">TENTANG <span class="text-danger">KAMI</span></h1>
                            <p class="text-muted mb-4">Kenali Kami Lebih dekat</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="mt-4">
                            <h2 class="fs-13 text-muted text-uppercase">Alamat : </h2>
                            <div class="ff-secondary fw-semibold">Perum Panorama Asri, Jl. Gorontalo
                                No.14<br />Kecamatan Sukahaji <br> Kabupaten Majalengka</div>
                        </div>
                        <div class="mt-4">
                            <h2 class="fs-13 text-muted text-uppercase">Waktu : </h2>
                            <div class="ff-secondary fw-semibold">09:00 AM to 05:00 PM</div>
                        </div>
                        <div>
                            <a class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-20"
                                    onclick="location.href='<?php echo e(url('https://web.facebook.com/arki.ajipangestu')); ?>'"
                                    target="_blank"></i></a>
                            <a class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-instagram-fill fs-20"
                                    onclick="location.href='<?php echo e(url('https://www.instagram.com/maheswari.enterprise/?next=%2F&hl=id')); ?>'"
                                    target="_blank"></i></a>
                            <a class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-whatsapp-fill fs-20"
                                    onclick="location.href='<?php echo e(url('https://wa.me/+6282316895620')); ?>'"
                                    target="_blank"></i></a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <div class="row">
                                        
                                        <iframe class="gmaps"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.552200589918!2d108.26807868885498!3d-6.824186699999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f256e1dea3cad%3A0x5989ed5e51590dbc!2sPerumahan%20Panorama%20Asri%20Majalengka!5e0!3m2!1sid!2sid!4v1668756542860!5m2!1sid!2sid"
                                            width="690" height="300" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
        </section>


        
        <!-- end testimonial -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-2 position-relative">
            <div class="container">
                <div class="row text-center text-sm-start align-items-center mt-4">
                    <div class="col-sm-6">
                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> <br> M A H E S W R I E N T E R P R I S E
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        </div>
        <!-- end layout wrapper -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/gmaps/gmaps.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/gmaps.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/swiper.init.js')); ?>"></script>
        <!--Swiper slider css-->
        <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!--Swiper slider js-->
        <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
        <!-- swiper.init js -->
        <script src="<?php echo e(URL::asset('build/js/pages/swiper.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/nft-landing.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\applications\maheswari-app\resources\views/pages/landing/index.blade.php ENDPATH**/ ?>