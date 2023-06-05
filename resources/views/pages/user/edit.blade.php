@extends('layouts.master')
@section('title')
    @lang('Akun ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Akun
        @endslot
    @endcomponent
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }} </div>
    @endif
    <div class="row">
        <div class="col-lg-12 mb-2 ">
            <div class="align-items-center d-flex">
                <h4 class="card-title mb-3 flex-grow-1 text-center">Edit Akun</h4>
            </div><!-- end card header -->
            <form method="POST" action="{{ route('user.update', $user['id']) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group row mb-2">
                    <label for="name" class="col-sm-3 col-form-label">Nama Pengguna <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="name"
                            value="{{ $user['name'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="email" type="text" class="form-control" id="email"
                            value="{{ $user['email'] }}">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="password" class="col-sm-3 col-form-label">Password <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control" id="password"
                            value="{{ $user['password'] }}">
                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                            type="button" id="password"><i class="ri-eye-fill align-middle"></i></button>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="publisherid" class="col-sm-3 col-form-label">Role <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <select class="form-select" name="role" id="disabledSelect">
                            <option value="{{ $user['role'] }}">Role</option>
                            <option value="owner">Owner</option>
                            <option value="bendahara">Bendahara</option>
                        </select>
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
