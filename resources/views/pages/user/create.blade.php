@extends('layouts.master')
@section('title')
    @lang('Akun ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Tambah Akun
        @endslot
    @endcomponent
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }} </div>
    @endif
    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Tambah Akun</h4>
            </div><!-- end card header -->
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row mb-2">
                    <label for="name" class="col-sm-3 col-form-label">Nama Pengguna <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="name"
                            placeholder="Nama Pengguna">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="password" class="col-sm-3 col-form-label">Password <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                            type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="role" class="col-sm-3 col-form-label">Role <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="role" id="role">
                            <option value="">Role</option>
                            <option value="owner">Owner</option>
                            <option value="bendahara">Bendahara</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary float-end"> Simpan </button>
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
