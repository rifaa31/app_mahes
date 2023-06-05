@extends('layouts.master')
@section('title')
    @lang('Testimoni ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Tambah Testimoni
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Tambah Testimoni</h4>
            </div><!-- end card header -->
            <form method="POST" action="{{ route('testimoni.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row mb-2">
                    <label for="customer_name" class="col-sm-3 col-form-label">Nama
                        Pemesan <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="customer_name" type="text" class="form-control" id="customer_name"
                            placeholder="Nama Pemesan">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="titleid" class="col-sm-3 col-form-label">Waktu <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="customer_date" type="date" class="form-control" id="customer_date"
                            placeholder="Waktu Mengucapkan">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="massage" class="col-sm-3 col-form-label">Pesan <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="massage" type="text" class="form-control" id="massage" placeholder="Pesan">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="image" class="col-sm-3 col-form-label">Upload Photo <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="image" type="file" id="image" class="custom-file-input">
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end">Simpan </button>
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
