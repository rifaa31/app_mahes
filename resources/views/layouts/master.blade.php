<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="light"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')- Maheswari Enterprise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Maheswari Enterprise" name="description" />
    <meta content="Rn" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo-mhs.png') }}">
    @include('layouts.head-css')
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
</head>

@section('body')
    @include('layouts.body')
@show
<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.topbar')
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('layouts.footer')
    </div>


    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
@include('layouts.vendor-scripts')
</body>

</html>
