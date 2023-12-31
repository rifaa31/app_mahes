<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - Maheswari Enterprise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Maheawari Enterprise" name="description" />
    <meta content="Rn" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo-mhs.png') }}">
    @include('layouts.head-css')
</head>

@yield('body')

@yield('content')

@include('layouts.vendor-scripts')
</body>

</html>
