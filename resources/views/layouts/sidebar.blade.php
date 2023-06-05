<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-mhs.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-maheswari.png') }}" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-mhs.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-maheswari.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <!-- start Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('/*') ? 'active font-weight-bolder' : '' }}"
                        href="/">
                        <i data-feather="home" class="icon-dual"></i> <span>@lang('Dashboards')</span>
                    </a>
                </li>
                <!-- start booking Menu -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('booking*') ? 'active font-weight-bolder' : '' }}"
                        href="{{ route('booking.index') }}">
                        <i data-feather="file" class="icon-dual"></i> <span>@lang('Pemesanan')</span>
                    </a>
                </li>
                <!-- end Booking Menu -->
                <!-- start product Menu -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product*') ? 'active font-weight-bolder' : '' }}"
                        href="{{ route('product.index') }}">
                        <i data-feather="grid" class="icon-dual"></i> <span>@lang('Produk ')</span>
                    </a>
                </li>
                <!-- end Product Menu -->
                <!-- start Testimoni Menu -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('testimoni*') ? 'active font-weight-bolder' : '' }}"
                        href="{{ route('testimoni.index') }}" aria-expanded="false">
                        <i data-feather="users" class="icon-dual"></i> <span>@lang('Testimoni')</span>
                    </a>
                </li>
                <!-- end Testimoni Menu -->
                <!-- start user Menu -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user*') ? 'active font-weight-bolder' : '' }}"
                        href="{{ route('user.index') }}" aria-expanded="false">
                        <i data-feather="user" class="icon-dual"></i> <span>@lang('Akun')</span>
                    </a>
                </li>
                <!-- end User Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
