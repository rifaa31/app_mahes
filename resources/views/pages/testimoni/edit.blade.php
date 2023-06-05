@extends('layouts.master')
@section('title')
    @lang('Testimoni ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Testimoni
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Edit Testimoni</h4>
            </div><!-- end card header -->
            <form method="POST" action="{{ route('testimoni.update', $testimoni['id']) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="customer_name" class="col-sm-3 col-form-label">Nama
                        Pemesan <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="customer_name" type="text" class="form-control" id="customer_name"
                            value="{{ $testimoni['customer_name'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="customer_date" class="col-sm-3 col-form-label">Waktu <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="customer_date" type="date" class="form-control" id="customer_date"
                            value="{{ $testimoni['customer_date'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="massage" class="col-sm-3 col-form-label">Pesan <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="massage" type="text" class="form-control" id="massage"
                            value="{{ $testimoni['massage'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="image" class="col-sm-3 col-form-label">Upload Photo <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="image" type="file" id="image" class="custom-file-input">
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"
                            value="{{ $testimoni['image'] }}"></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end"> Update </button>
                    </div>
                </div>
            </form>
            <!--end col-->
        </div>
    </div>
    <!--end col-->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
