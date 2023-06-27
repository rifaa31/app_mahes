@extends('layouts.master-without-nav')
@section('title')
    @lang('Book Now ')
@endsection
@section('content')
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
                                    <img src="{{ URL::asset('assets/images/logo-maheswari.png') }}" alt=""
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
                                    <h5 class="text-primary mb-4">All Package Maheswari</h5>
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-info" role="alert">
                                        {{ session('success') }} </div>
                                @endif
                                <form class="row g-3" method="POST" action="{{ route('landing.store') }}">
                                    {{ csrf_field() }}
                                    <div class="col-md-6">
                                        <label for="customer" class="form-label">Nama calon Pengantin <span
                                                class="text-danger">*</span></label>
                                        <input name="customer" type="text" class="form-control" id="customer"
                                            placeholder="Nama Calon Pengantin">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="number_phone" class="form-label">Nomor Handphone <span
                                                class="text-danger">*</span></label>
                                        <input name="number_phone" type="text" class="form-control" id="number_phone"
                                            placeholder="Nomor Handphone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wedding_date" class="form-label">Tanggal Pernikahan <span
                                                class="text-danger">*</span></label>
                                        <input name="wedding_date" type="date" class="form-control" id="wedding_date"
                                            placeholder="Tanggal Pernikahan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="location" class="form-label">Alamat <span
                                                class="text-danger">*</span></label>
                                        <input name="location" type="text" class="form-control" id="location"
                                            placeholder="Alamat">
                                    </div>
                                    <div class="row mb-3">
                                        <label for="location_wedding" class="col-sm-3 col-form-label">Lokasi Pernikahan<span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input name="location_wedding" type="text" class="form-control"
                                                id="location_wedding" placeholder="Enter Lokasi Pernikahan">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="all_package" class="col-sm-3 col-form-label">All Package <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="product_id[]" id="all_package"
                                                oninvalid="this.setCustomValidity('Pilih minimal 1 Package')"
                                                oninput="this.setCustomValidity('')" required>
                                                <option value="">Pilih Package</option>
                                                @foreach ($product as $p)
                                                    @php
                                                        if ($p['type'] != 'all_package') {
                                                            continue;
                                                        }
                                                    @endphp
                                                    <option value="{{ $p['id'] }}#{{ $p['price'] }}">
                                                        {{ $p['title'] }} -
                                                        {{ number_format($p['price'], 0, '', '.') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="additional" class="col-sm-3 col-form-label">Additional</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="product_id[]" id="additional">
                                                <option value="">Pilih Additional</option>
                                                @foreach ($product as $p)
                                                    @php
                                                        if ($p['type'] != 'additional') {
                                                            continue;
                                                        }
                                                    @endphp
                                                    <option value="{{ $p['id'] }}#{{ $p['price'] }}">
                                                        {{ $p['title'] }} -
                                                        {{ number_format($p['price'], 0, '', '.') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="equipment" class="col-sm-3 col-form-label">Equipment</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="product_id[]" id="equipment">
                                                <option value="">-Pilih Equipment-</option>
                                                @foreach ($product as $p)
                                                    @php
                                                        if ($p['type'] != 'equipment') {
                                                            continue;
                                                        }
                                                    @endphp
                                                    <option value="{{ $p['id'] }}#{{ $p['price'] }}">
                                                        {{ $p['title'] }} -
                                                        {{ number_format($p['price'], 0, '', '.') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="entertainment" class="col-sm-3 col-form-label">Music
                                            Entertainment</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="product_id[]" id="entertainment">
                                                <option value="">-Pilih Entertainment-</option>
                                                @foreach ($product as $p)
                                                    @php
                                                        if ($p['type'] != 'entertainment') {
                                                            continue;
                                                        }
                                                    @endphp
                                                    <option value="{{ $p['id'] }}#{{ $p['price'] }}">
                                                        {{ $p['title'] }} -
                                                        {{ number_format($p['price'], 0, '', '.') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="upacara_adat" class="col-sm-3 col-form-label">Upacara Adat</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="product_id[]" id="upacara_adat">
                                                <option value="">-Pilih Upacara Adat-</option>
                                                @foreach ($product as $p)
                                                    @php
                                                        if ($p['type'] != 'upacara_adat') {
                                                            continue;
                                                        }
                                                    @endphp
                                                    <option value="{{ $p['id'] }}#{{ $p['price'] }}">
                                                        {{ $p['title'] }} -
                                                        {{ number_format($p['price'], 0, '', '.') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="alert alert-primary" role="alert">
                                        <h5 class="text-primary font-weight-bold">Total pembayaran : Rp
                                            <label id="total_payment">0</label>
                                        </h5>

                                        <h5 class="text-primary">
                                            <p>Diwajibkan untuk membayar down payment(10%) : Rp <label
                                                    id="minimal_payment">0</label></p>
                                        </h5>

                                    </div>
                                    <!-- Static Backdrop -->
                                    <h6 class="text">
                                        <p>Note :</p>
                                        <p>- Pembayaran dilakukan melalui rekening a/n Rifa Nurfalah BRI
                                            4305010117246530</p>
                                        <p>-Setelah melakukan pembayaran silahkan untuk konfirmasi pembayaran ke whatapp
                                            admin</p>
                                    </h6>
                                    <div class="mt-4">
                                        {{-- <button type="submit" class="btn btn-success w-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop"> Booking --}}
                                        <button type="submit" class="btn btn-success w-100">
                                            Booking
                                        </button>
                                        {{-- href='{{ url('https://wa.me/+6282316895620') }}' target="_blank" --}}
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
                                <a class="btn btn-success" target="_blank"
                                    href='{{ url('https://wa.me/+6282316895620') }}'> Payment</a>

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
                            </script> Me. <i class="mdi mdi-heart text-danger"></i>
                            Maheswari.Enterprise</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/particles.js/particles.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/particles.app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>
    <script>
        const all_package = document.querySelector('#all_package')
        const additional = document.querySelector('#additional')
        const upacara_adat = document.querySelector('#upacara_adat')
        const entertainment = document.querySelector('#entertainment')
        const minimal_payment = document.querySelector('#minimal_payment')
        const total_payment = document.querySelector('#total_payment')
        let all_package_cost = 0;
        let additional_cost = 0;
        let updat_cost = 0;
        let entertainment_cost = 0;
        let total = 0;
        let final_payment = 0;

        all_package.addEventListener('change', function(e) {

            if (e.currentTarget.value == '') {
                all_package_cost = 0;
                total = all_package_cost;
            } else {
                total -= all_package_cost
                all_package_cost = parseInt(split_option(e.currentTarget.value)[1]);

                total = all_package_cost
            }
            final_payment = total + additional_cost + entertainment_cost + updat_cost
            total_payment.innerHTML = final_payment
            minimal_payment.innerHTML = rupiah((final_payment * 10) / 100)
        })
        additional.addEventListener('change', function(e) {

            if (e.currentTarget.value == '') {
                additional_cost = 0;
                total = additional_cost;
            } else {
                total -= additional_cost
                additional_cost = parseInt(split_option(e.currentTarget.value)[1]);

                total = additional_cost
            }
            final_payment = total + all_package_cost + entertainment_cost + updat_cost
            total_payment.innerHTML = final_payment
            minimal_payment.innerHTML = rupiah((final_payment * 10) / 100)
        })

        entertainment.addEventListener('change', function(e) {

            if (e.currentTarget.value == '') {
                entertainment_cost = 0;
                total = entertainment_cost;
            } else {
                total -= entertainment_cost
                entertainment_cost = parseInt(split_option(e.currentTarget.value)[1]);

                total = entertainment_cost
            }
            final_payment = total + additional_cost + all_package_cost + updat_cost
            total_payment.innerHTML = final_payment
            minimal_payment.innerHTML = rupiah((final_payment * 10) / 100)
        })

        upacara_adat.addEventListener('change', function(e) {

            if (e.currentTarget.value == '') {
                updat_cost = 0;
                total = updat_cost;
            } else {
                total -= updat_cost
                updat_cost = parseInt(split_option(e.currentTarget.value)[1]);

                total = updat_cost
            }
            final_payment = total + additional_cost + all_package_cost + entertainment_cost
            total_payment.innerHTML = final_payment
            minimal_payment.innerHTML = rupiah((final_payment * 10) / 100)
        })


        function split_option(value) {
            return value.split('#')
        }

        function rupiah(number) {
            return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
            }).format(number);
        }
    </script>
@endsection
