@extends('layouts.master-without-nav')
@section('title')
    @lang('landing ')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- cdn --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
@endsection
@section('body')

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')
        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ URL::asset('/index') }}">
                        <img src="{{ URL::asset('assets/images/logo-maheswari.png') }}" class="card-logo card-logo-dark"
                            alt="logo dark" height="50">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light"
                            alt="logo light" height="30">
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
                                <a class="nav-link fs-15" href="#team">Wedding Consultant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="#testimonial">Testimonial</a>
                            </li>
                        </ul>
                        <div class="">
                            <a href="{{ URL::asset('/auth-signup-basic') }}" class="btn btn-success">Login</a>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navbar -->

            <!-- start hero section -->
            <section class="section pb-0 hero-section" id="home">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center mt-lg-5 pt-5">
                                <h1 class="display-6 fw-semibold mb-3 lh-base">Wujudkan Impian Pernikahanmu bersama
                                    <span class="text-primary">Maheswari Enterprise </span>
                                </h1>
                                <p class="lead text-muted lh-base">Memberikan jasa pelayanan/ Wedding Organizer terbaik dan
                                    terstruktur. Sudah berpengalaman dan profesional dalam menyelenggarakan Event
                                    Pernikahan baik Indoor atau Outdoor, Pernikahan Tradisional, Nasional dan Internasional
                                    yang kami kemas sesuai dengan permintaan dan pengimplementasian yang Epic.</p>

                                <div class="d-flex gap-2 justify-content-center mt-4">
                                    <a class="btn btn-primary" onclick="location.href='{{ route('landing.booknow') }}'">Book
                                        Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    <a href="#package" class="btn btn-danger">View Package <i
                                            class="ri-eye-line align-middle ms-1"></i></a>
                                </div>
                                <div class="mt-5 mt-sm-6 pt-sm-6 mb-sm-n6 demo-carousel">
                                    <div class="demo-img-patten-top d-none d-sm-block">
                                        <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="demo-img-patten-bottom d-none d-sm-block">
                                        <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="pt-10 mt-12">
                                        <div class="swiper effect-coverflow-swiper rounded pb-5">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari1.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari2.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari3.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari4.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari5.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ URL::asset('assets/images/demos/maheswari6.jpg') }}"
                                                        alt="" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="swiper-pagination swiper-pagination-dark"></div>
                                        </div>
                                    </div>
                                    {{-- <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <img src="{{ URL::asset('assets/images/demos/mahes.jpg') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                            </path>
                        </g>
                    </svg>
                </div>
                <!-- end shape -->
            </section>

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold lh-base">Kenapa Harus Maheswari ?</h1>
                                <p class="text-muted">Kami memberikan pelayanan terbaik, Kami bekerja sesuai dengan
                                    permintaan dan kebutuhan, Kami bekerja dengan penuh rasa tanggung jawab, Kami bantu
                                    untuk mewujudkan Your Wedding Dream, We are Young, Smart & Integrity</p>
                            </div>
                        </div>
                        <!-- end row -->

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
                                        <h5 class="fs-18">Zuper Team</h5>
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
            <section class="section bg-light" id="package">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold"> CHOOSE YOUR PACKAGE NOW</h3>
                                <p class="text-muted mb-4">Pilih Paket yang sesuai dengan Kebutuhan Kamu</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="swiper paket " dir="ltr">
                        <div class="swiper-wrapper">
                            @foreach ($package as $item)
                                <div class="swiper-slide">
                                    <div class="row">
                                        <!--paket1-->
                                        <div class="col-lg-12 justify-content-between">

                                            <div class="card plan-box mb-0">
                                                <div class="card-body p-4 m-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h5 class="mb-1 fw-semibold">{{ $item['title'] }}</h5>
                                                            <p class="text-muted mb-0">Starting From</p>
                                                        </div>
                                                    </div>
                                                    <div class="py-4 text-center">
                                                        <h1 class="month"><sup></sup><span
                                                                class="ff-secondary fw-bold">{{ number_format($item['price'], 0, '', '.') }}</span>
                                                    </div>
                                                    <div>
                                                        <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        {!! $item['description'] !!}
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                        {{-- <div class="" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="false"
                                                            aria-controls="collapse">
                                                            <a href="javascript:void(0);"
                                                                class="card-link link-secondary">Lihat selengkapnya <i
                                                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                        </div> --}}
                                                        <div class="mt-4">
                                                            <a class="btn btn-soft-success w-100"
                                                                onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                                Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--paket1-->
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="swiper-slide">
                                <!--paket2-->
                                <div class="col-lg-12 justify-content-between">
                                    <div class="card plan-box mb-0 ribbon-box right">
                                        <div class="card-body p-4 m-2">

                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Niskala Package</h5>
                                                    <p class="text-muted mb-0">Starting</p>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">3
                                                        JT</span>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Crew WO <b>6</b> Person
                                                                <div><b>1</b> Orang Leader</div>
                                                                <div><b>2</b> Orang Officer</div>
                                                                <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                <div><b>1</b> Orang Content Creator</div>
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
                                                                <b>6</b> Pcs Buku Panduan Pernikahan
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
                                                        <div class="collapse mb-3" id="collapse2">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Qobul
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Kordinasi Kesemua Vendor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Technical Meeting
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampingan Siraman
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Ballon Helium
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Confenty / Party Popper
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Flashmob
                                                                </div>
                                                            </div>
                                                        </div>
                                                </ul>
                                                <div class="" data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse">
                                                    <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                        selengkapnya <i
                                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                                </div>
                                                <div class="mt-4">
                                                    <a class="btn btn-soft-success w-100"
                                                        onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                        Now </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--paket2-->
                            </div>

                            <div class="swiper-slide">
                                <!--paket3-->
                                <div class="col-lg-12 justify-content-between">
                                    <div class="card plan-box mb-0 ribbon-box right">
                                        <div class="card-body p-4 m-2">
                                            <div class="ribbon-two ribbon-two-danger"><span>Best Seller</span></div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Abimana Package</h5>
                                                    <p class="text-muted mb-0">Starting From</p>
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
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Pembawa Acara Akad s/d Pernikahan
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Crew WO <b>6</b> Person
                                                                <div><b>1</b> Orang Leader</div>
                                                                <div><b>2</b> Orang Officer</div>
                                                                <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                <div><b>1</b> Orang Content Creator</div>
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
                                                                <b>6</b> Pcs Buku Panduan Pernikahan
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
                                                                Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                            </div>
                                                        </div>
                                                        <div class="collapse mb-3" id="collapse3">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Ijab
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Qobul
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Kordinasi Kesemua Vendor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Technical Meeting
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampingan Siraman
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Balon helium
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Conffenty / Party Popper
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Flasmob
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            </ul>
                                            <div class="" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse">
                                                <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                    selengkapnya <i
                                                        class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--paket3-->

                            </div>

                            <div class="swiper-slide">
                                <!--paket4-->
                                <div class="col-lg-12 justify-content-between">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Adiluhung Package</h5>
                                                    <p class="text-muted mb-0">Starting From</p>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">5
                                                        JT</span>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Pembawa Acara Akad s/d Pernikahan
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Crew WO <b>7</b> Person
                                                                <div><b>1</b> Orang Leader</div>
                                                                <div><b>3</b> Orang Officer</div>
                                                                <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                <div><b>1</b> Orang Content Creator</div>
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
                                                                <b>7</b> Pcs Buku Panduan Pernikahan
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
                                                                Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                            </div>
                                                        </div>
                                                        <div class="collapse mb-3" id="collapse4">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Ijab
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Qobul
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Kordinasi Kesemua Vendor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Technical Meeting
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Siraman
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Fitting Busana
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Balon helium
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Conffenty / Party Popper
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Fire Works (Kembang Api)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Flasmob
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            </ul>
                                            <div class="" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse">
                                                <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                    selengkapnya <i
                                                        class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--paket4-->
                            </div>
                            <div class="swiper-slide">
                                <!--paket5-->
                                <div class="col-lg-12 justify-content-between">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Emerald Package</h5>
                                                    <p class="text-muted mb-0">Starting From</p>
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
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Pembawa Acara Akad s/d Pernikahan
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Crew WO <b>7</b> Person
                                                                <div><b>1</b> Orang Leader</div>
                                                                <div><b>3</b> Orang Officer</div>
                                                                <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                <div><b>1</b> Orang Content Creator</div>
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
                                                                <b>7</b> Pcs Buku Panduan Pernikahan
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
                                                                Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                            </div>
                                                        </div>
                                                        <div class="collapse mb-3" id="collapse5">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Ijab
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Qobul
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Kordinasi Kesemua Vendor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Technical Meeting
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Siraman
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Fitting Busana
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Balon helium
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Conffenty / Party Popper
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Fire Works (Kembang Api)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Sexophone / Biola
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Smoke Boom
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Flasmob
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            </ul>
                                            <div class="" data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse">
                                                <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                    selengkapnya <i
                                                        class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--paket5-->
                            </div>

                            <div class="swiper-slide">
                                <!--paket6 -->
                                <div class="col-lg-12 justify-content-between">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Luxury Package</h5>
                                                    <p class="text-muted mb-0">Starting From</p>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">8,5
                                                        JT</span>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Pembawa Acara Akad s/d Pernikahan
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Crew WO <b>8</b> Person
                                                                <div><b>1</b> Orang Leader</div>
                                                                <div><b>4</b> Orang Officer</div>
                                                                <div><b>1</b> Orang Liaison Officer CPW</div>
                                                                <div><b>1</b> Orang Liaison Officer CPP</div>
                                                                <div><b>1</b> Orang Content Creator</div>
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
                                                                <b>7</b> Pcs Buku Panduan Pernikahan
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
                                                                Teks Jawaban Izin Nikah Orangtua Kepada CPW
                                                            </div>
                                                        </div>
                                                        <div class="collapse mb-3" id="collapse6">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Ijab
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Teks Qobul
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Kordinasi Kesemua Vendor
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Technical Meeting
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Siraman
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Pendampinagn Fitting Busana
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    2 Pcs Buku Tamu
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i
                                                                            class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Balon helium
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Conffenty / Party Popper
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Fire Works (Kembang Api)
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Sexophone / Biola
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Dry Ice
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Smoke Boom
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 text-success me-1">
                                                                    <i
                                                                        class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    Flasmob
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            </ul>
                                            <div class="" data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse">
                                                <a href="javascript:void(0);" class="card-link link-secondary">Lihat
                                                    selengkapnya <i
                                                        class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                            </div>
                                            <div class="mt-4">
                                                <a class="btn btn-soft-success w-100"
                                                    onclick="location.href='{{ route('landing.booknow') }}'">Book
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--paket6-->
                            </div> --}}
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                    <div class=" swiper next swiper-button-next"></div>
                    <div class="swiper-prev swiper-button-prev"></div>
                </div>
            </section>
            <!-- end package -->

            <!-- start add -->
            <section class="section" id="additional">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-muted">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">ADDITIONAL</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-2">
                                                    <img class="rounded-start img-fluid h-100 object-cover"
                                                        src="{{ URL::asset('assets/images/small/img1.jpg') }}"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">Additional</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text mb-2"> <b>IDR 600.000</b> | Saxophone/Biola
                                                        </p>
                                                        <p class="card-text mb-2"><b>IDR 700.000</b> |
                                                            Fireworks,confetty
                                                        </p>
                                                        <p class="card-text mb-2"><b>IDR 250.000</b> | Balon Helium
                                                        </p>
                                                        <p class="card-text mb-2"><b>IDR 250.000</b> | Dry Ice,
                                                            Firework,
                                                            Confetty, Balon
                                                            Helium </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xxl-6">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-2">
                                                    <img class="rounded-end img-fluid h-100 object-cover"
                                                        src="{{ URL::asset('assets/images/small/img-light.jpg') }}"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">Lighting equipment</h5>
                                                        <h5 class="card-title mb-0"><b>IDR 2.500.000</b></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text mb-2">- 4 Beam</p>
                                                        <p class="card-text mb-2">- 12 Parled</p>
                                                        <p class="card-text mb-2">- 4 Peresnel</p>
                                                        <p class="card-text mb-2">- 1 Genset + Bahan Bakar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="col-lg-12">
                            <div class="text-muted">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">MUSIC ENTERTAINMENT</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-2">
                                                    <img class="rounded-start img-fluid h-100 object-cover"
                                                        src="{{ URL::asset('assets/images/small/music1.jpg') }}"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">Eectone</h5>
                                                        <h5 class="card-title mb-0"><b>IDR 4.000.000</b></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text mb-2">- 2 Orang Penyanyi (P&L)</p>
                                                        <p class="card-text mb-2">- Keyboadist</p>
                                                        <p class="card-text mb-2">- Saxophone</p>
                                                        <p class="card-text mb-2">- Kendang</p>
                                                        <p class="card-text mb-2">- Sound Sistem 3000 watt</p>
                                                        <p class="card-text mb-2">- Diesel</p>
                                                        <p><br></p>
                                                        <p class="card-text"><small class="text-muted">Start
                                                                Performance
                                                                10.00-16.00 WIB</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xxl-6">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-2">
                                                    <img class="rounded-end img-fluid h-100 object-cover"
                                                        src="{{ URL::asset('assets/images/small/music2.jpg') }}"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">Band / Akustik</h5>
                                                        <h5 class="card-title mb-0"><b>IDR 6.000.000</b></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text mb-2">- 2 Orang Penyanyi (P&L)</p>
                                                        <p class="card-text mb-2">- Gitar</p>
                                                        <p class="card-text mb-2">- Bass</p>
                                                        <p class="card-text mb-2">- Drum</p>
                                                        <p class="card-text mb-2">- Sexophone / Biola</p>
                                                        <p class="card-text mb-2">- Sound Sistem 5000 watt</p>
                                                        <p class="card-text mb-2">- Diesel</p>
                                                        <p class="card-text"><small class="text-muted">Start
                                                                Performance
                                                                10.00-16.00 WIB</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->
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
                            <div class="text-muted">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">UPACARA ADAT </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper upacara " dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!--upacara adat1-->
                                    <div class="col-xl-12" id="card-none1">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-0">Mapag Calon Panganten</h6>
                                                        <h6 class="card-title mb-0"><b>IDR 3.500.000</b></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse show" id="collapseexample1">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Suling
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Biola
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Juru Kawi/sinden
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Penari 6 Orang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- upacara adat1 -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- upacara adat2 -->
                                    <div class="col-xl-12" id="card-none2">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                            Badaya</h6>
                                                        <h6 class="card-title mb-0"><b>IDR 4.500.000</b></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse show" id="collapseexample1">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Suling
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Biola
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Tari Badaya
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- upacara adat2 -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- upacara adat3 -->
                                    <div class="col-xl-12" id="card-none3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                            Kendang</h6>
                                                        <h6 class="card-title mb-0"><b>IDR 4.500.000</b></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse show" id="collapseexample1">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Suling
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Biola
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Tari Rampak Kendang
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- upacara adat3 -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- upacara adat4 -->
                                    <div class="col-xl-12" id="card-none3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-0">Mapag Panganten + Tari Rampak
                                                            Kendang +
                                                            Rama Sinta</h6>
                                                        <h6 class="card-title mb-0"><b>IDR 5.000.000</b></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse show" id="collapseexample1">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Live Music
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Suling
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kendang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Biola
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Juru Kawih/sinden
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Perkusi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Pemandu Rangkaian Adat
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Penari 7 Orang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Lengser / Ambu
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Tari Rampak Kendang
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Tari Rama Sinta
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- upacara adat4 -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- upacara adat5 -->
                                    <div class="col-xl-12" id="card-none3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="card-title mb-0">Siraman</h6>
                                                        <h6 class="card-title mb-0"><b>IDR 1.500.000</b></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body collapse show" id="collapseexample1">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Pemandu
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Kecapi
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-checkbox-circle-fill text-primary"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-muted">Suling
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- upacara adat5 -->
                                </div>

                            </div>
                        </div>

                    </div><!-- end row -->
                </div><!-- end row -->
            </section>
            <!-- end upacara adat -->

            <!-- start team -->
            <section class="section bg-soft-primary" id="team">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Wedding <span class="text-danger">Consultant</span></h3>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body text-center p-4">
                                        <div class="avatar-xl mx-auto mb-4 position-relative">
                                            <img src="{{ URL::asset('assets/images/users/avatar1.jpg') }}" alt=""
                                                class="img-fluid rounded-circle">
                                            {{-- <a href="{{ URL::asset('/apps-mailbox') }}"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <div class="avatar-title bg-transparent">
                                                <i class="ri-mail-fill align-bottom"></i>
                                            </div>
                                        </a> --}}
                                        </div>
                                        <!-- end card body -->
                                        <h5 class="mb-1"><a href="{{ URL::asset('/pages-profile') }}"
                                                class="text-body">Dedi
                                                wardatul Q</a></h5>
                                        {{-- <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p> --}}
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body text-center p-4">
                                        <div class="avatar-xl mx-auto mb-4 position-relative">
                                            <img src="{{ URL::asset('assets/images/users/avatar2.jpg') }}" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <!-- end card body -->
                                        <h5 class="mb-1"><a href="{{ URL::asset('/pages-profile') }}"
                                                class="text-body">Izzal
                                                Tufik N</a></h5>
                                        {{-- <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p> --}}
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body text-center p-4">
                                        <div class="avatar-xl mx-auto mb-4 position-relative">
                                            <img src="{{ URL::asset('assets/images/users/avatar3.jpg') }}" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <!-- end card body -->
                                        <h5 class="mb-1"><a href="{{ URL::asset('/pages-profile') }}"
                                                class="text-body">Rifa
                                                Nurfalah</a></h5>
                                        {{-- <p class="text-muted mb-0 ff-secondary">Wedding Konsultan</p> --}}
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body text-center p-4">
                                        <div class="avatar-xl mx-auto mb-4 position-relative">
                                            <img src="{{ URL::asset('assets/images/users/avatar4.jpg') }}" alt=""
                                                class="img-fluid rounded-circle">
                                        </div>
                                        <!-- end card body -->
                                        <h5 class="mb-1"><a href="{{ URL::asset('/pages-profile') }}"
                                                class="text-body">Didit
                                                Hardiyanto</a></h5>
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
                <div class="container d-flex justify-content-center mt-100 mb-100">
                    <div class="row">
                        <div class=" mb-5">
                            <div class="row gy-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <div class="mt-4">
                                                <h5 class="fs-13 text-muted text-uppercase">Office Address:</h5>
                                                <div class="ff-secondary fw-semibold">Perum Panorama Asri, Jl. Gorontalo
                                                    No.14<br />Kecamatan Sukahaji <br> Kabupaten Majalengka</div>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                                                <br>
                                            </div>
                                            <div>
                                                <a class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                        class="ri-facebook-fill fs-16"
                                                        onclick="location.href='{{ url('https://web.facebook.com/arki.ajipangestu') }}'"
                                                        target="_blank"></i></a>
                                                <a class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                        class="ri-instagram-fill fs-16"
                                                        onclick="location.href='{{ url('https://www.instagram.com/maheswari.enterprise/?next=%2F&hl=id') }}'"
                                                        target="_blank"></i></a>
                                                <a class="btn btn-info btn-icon waves-effect waves-light"><i
                                                        class="ri-whatsapp-fill fs-16"
                                                        onclick="location.href='{{ url('https://wa.me/+6282316895620') }}'"
                                                        target="_blank"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div>
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <div>
                                                    <iframe class="gmaps"
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.552200589918!2d108.26807868885498!3d-6.824186699999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f256e1dea3cad%3A0x5989ed5e51590dbc!2sPerumahan%20Panorama%20Asri%20Majalengka!5e0!3m2!1sid!2sid!4v1668756542860!5m2!1sid!2sid"
                                                        width="750" height="300" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
        </div>
        <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- start testimonial -->
        <section class="section" id="testimonial">
            <div class="container d-flex justify-content-center mt-100 mb-100">
                <div class="row">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold"> TESTIMONIAL PENGANTIN</h3>
                        <p class="text-muted mb-4">Berikut adalah Testimoni Dari Pengantin Yang Telah Menggunakan Jasa
                            Kami.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            {{-- <div class="card-body">
                                    <h4 class="card-title">Recent Comments</h4>
                                    <h6 class="card-subtitle">Latest Comments section by users</h6>
                                </div> --}}
                            @foreach ($testimoni['data'] as $item)
                                <div class="comment-widgets m-b-20">
                                    <div class="d-flex flex-row comment-row">
                                        <div class="p-2"><span class="round"><img
                                                    src="{{ URL::asset('assets/images/users/user-dummy-img.jpg') }}"
                                                    alt="Header Avatar" width="50"></span></div>
                                        {{-- <div class="p-2"><span class="round"><img
                                                        src="@if {{ images/{{ $item['image'] }} }}
                                                @else{{ URL::asset('assets/images/users/user-dummy-img.jpg') }} @endif"
                                                        alt="Header Avatar" width="50"></span></div> --}}
                                        <div class="comment-text w-100">
                                            <h5>{{ $item['customer_name'] }}</h5>
                                            <div class="comment-footer">
                                                <span class="date">{{ $item['customer_date'] }}</span>
                                            </div>
                                            <p class="m-b-5 m-t-10">{{ $item['massage'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
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
    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/swiper/swiper.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/landing.init.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/gmaps/gmaps.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/gmaps.init.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/swiper.init.js') }}"></script>
    @endsection
