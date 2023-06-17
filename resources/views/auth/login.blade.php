@extends('layouts.master-without-nav')
@section('title')
    @lang('Login ')
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
                                    <img src="{{ URL::asset('assets/images/logo-mhs.png') }}" alt="" height="70">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Maheswari Enterprise</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">LOGIN</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                {{-- value="{{ old('email', 'admin@themesbrand.com') }}"  --}} id="username" name="email"
                                                placeholder="Enter username">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" id="password-input" name="password"
                                                    placeholder="Enter password"
                                                    class="form-control pe-5 @error('password') is-invalid @enderror">
                                                <div class="input-group-append">

                                                    <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                                    <span id="mybutton" onclick="change()"
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted">

                                                        <!-- icon mata bawaan bootstrap  -->
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-eye-fill" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                            <path fill-rule="evenodd"
                                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-4">

                                            <button class="btn btn-success w-100" type="submit">Login</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                @endsection
                @section('script')
                    <script src="{{ URL::asset('assets/libs/particles.js/particles.js.min.js') }}"></script>
                    <script src="{{ URL::asset('assets/js/pages/particles.app.js') }}"></script>
                    <script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>
                    <script>
                        // membuat fungsi change
                        function change() {

                            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password
                            var x = document.getElementById('password-input').type;

                            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                            if (x == 'password') {

                                //ubah form input password menjadi text
                                document.getElementById('password-input').type = 'text';

                                //ubah icon mata terbuka menjadi tertutup
                                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                                </svg>`;
                            } else {

                                //ubah form input password menjadi text
                                document.getElementById('password-input').type = 'password';

                                //ubah icon mata terbuka menjadi tertutup
                                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                                </svg>`;
                            }
                        }
                    </script>
                @endsection
