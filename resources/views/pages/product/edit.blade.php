@extends('layouts.master')
<link href="{{ asset('assets/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet">

@section('title')
    @lang('Produk ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Produk
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Edit Produk</h4>
            </div><!-- end card header -->
            <form method="post" action="{{ route('product.update', $product['id']) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="title" class="col-sm-3 col-form-label">Nama Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {{-- <input name="id" type="text" class="form-control" id="id"
                            value="{{ $product['id'] }}" placeholder=""> --}}
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ $product['title'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="price" class="col-sm-3 col-form-label">Harga Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="price" type="number" class="form-control" id="price"
                            value="{{ $product['price'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="type" class="col-sm-3 col-form-label">jenis Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="type" id="type">
                            <option value="{{ $product['type'] }}">Jenis Produk</option>
                            <option value="package">Package</option>
                            <option value="equipment">Equipment</option>
                            <option value="additional">Additional</option>
                            <option value="entertaiment">Music Entertainment</option>
                            <option value="updat">Upacara Adat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="summernote" class="col-sm-3 col-form-label">Deskripsi Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <textarea id="summernote" name="description" type="text" class="form-control" style="height: 100px"
                            id="floatingTextarea" value="{{ $product['description'] }}"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="image" class="col-sm-3 col-form-label">Upload Photo</label>
                    <div class="col-sm-9">
                        <input name="image" type="file" id="image" class="custom-file-input"
                            value="{{ $product['image'] }}">
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end">Update</button>

                        {{-- <button type="submit" class="btn btn-primary float-end">Simpan </button> --}}
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
    <script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
