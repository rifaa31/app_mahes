@extends('layouts.master')
@section('title')
    @lang('Detail ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Detail Pemesanan
        @endslot
    @endcomponent

    <div class="row">
        {{-- <div class="col-lg-12 mb-2 "> --}}
        <div class="align-items-center d-flex">
            <h4 class="card-title mb-3 flex-grow-1 text-center">Detail Pemesanan</h4>
        </div>
        <!-- end card header -->
        {{-- <p class="fw-bold">Nama Pemesan : {{ $booking->customer }}</p> --}}
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Nama Pemesan </div>
                <div class="col-8">: {{ $booking['customer'] }}</div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Alamat </div>
                <div class="col-8">: {{ $booking['location'] }} </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Tanggal Pernikahan </div>
                <div class="col-8">: {{ $booking['wedding_date'] }}</div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Nomor Handphone </div>
                <div class="col-8">: {{ $booking['number_phone'] }}</div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Lokasi Pernikahan </div>
                <div class="col-8">: {{ $booking['location_wedding'] }}</div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">status </div>
                <div class="col-8">: {{ $booking['status'] == 'waiting' ? 'Down Payment' : 'Waiting' }}
                </div>
            </div>
        </div>
        @foreach ($booking->bookingDetail as $b)
            <div class="container ">
                @php
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

                @endphp
                <div class="row">
                    <div class="col-2 fw-bold">{{ $str }}</div>
                    <div class="col-8">:
                        {{ $name }}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">Total Pembayaran </div>
                <div class="col-8">: {{ $booking['total_payment'] }}</div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-2 fw-bold">
                    <a href="{{ route('booking.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
