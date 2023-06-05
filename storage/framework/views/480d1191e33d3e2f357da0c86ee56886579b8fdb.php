<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-mhs.png')); ?>" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-mhs.png')); ?>" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-maheswari.png')); ?>" alt="" height="50">
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
                    <a class="nav-link" href="" aria-expanded="false">
                        <i data-feather="home" class="icon-dual"></i> <span><?php echo app('translator')->get('Dashboards'); ?></span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->
                <!-- start schedule Menu -->
                
                <!-- end schedule Menu -->
                <!-- start booking Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('booking.index')); ?>" aria-expanded="false"
                        aria-controls="sidebarCRM">
                        <i data-feather="file" class="icon-dual"></i> <span><?php echo app('translator')->get('Pemesanan'); ?></span>
                    </a>
                </li>
                <!-- end Booking Menu -->
                <!-- start product Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('product.index')); ?>" aria-expanded="false">
                        <i data-feather="grid" class="icon-dual"></i> <span><?php echo app('translator')->get('Produk '); ?></span>
                    </a>
                </li>
                <!-- end Product Menu -->
                <!-- start Testimoni Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('testimoni.index')); ?>" aria-expanded="false">
                        <i data-feather="users" class="icon-dual"></i> <span><?php echo app('translator')->get('Testimoni'); ?></span>
                    </a>
                </li>
                <!-- end Testimoni Menu -->
                <!-- start user Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('user.index')); ?>" aria-expanded="false">
                        <i data-feather="user" class="icon-dual"></i> <span><?php echo app('translator')->get('Akun'); ?></span>
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
<?php /**PATH C:\applications\maheswari-app\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>