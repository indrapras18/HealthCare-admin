<?php
include ('../../core/koneksi.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Fonik - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body data-sidebar="dark">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="../../index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="20">
                        </span>
                    </a>

                    <a href="../../index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="../../img/logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg" style="color:white; font-size:19px;">
                            <img src="../../img/logoWhite.png" alt="" height="30">
                            <strong>HealthCare</strong>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="d-none d-sm-block ms-2">
                    <h4 class="page-title font-size-18">Dashboard</h4>
                </div>

            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input form-control" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-bs-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                        data-bs-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                            alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                            Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle me-2"></i> My
                            Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">5</span><i
                                class="dripicons-gear font-size-16 align-middle me-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock font-size-16 align-middle me-2"></i> Lock
                            screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                            Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="dashboard.php" class="waves-effect">
                            <i class="dripicons-device-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>    

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="dripicons-blog"></i></span>
                            <span> Forms </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="form-poli.php">Form Poli</a></li>
                            <li><a href="form-pasien.php">Form Pasien</a></li>
                            <li><a href="form-tenagamedis.php">Form Tenaga Medis</a></li>
                            <li><a href="form-.php">Form Jadwal</a></li>
                            <li><a href="form-.php">Form FAQ</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-list"></i>
                            <span> Tables </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tables-tenaga-medis.php">Tenaga Medis</a></li>
                            <li><a href="tables-poli.php">Poli</a></li>
                            <li><a href="tables-pasien.php">Pasien</a></li>
                            <li><a href="tables-pasien.php">Jadwal</a></li>
                            <li><a href="tables-pasien.php">FAQ</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">
                                <?php
                                $data_user = mysqli_query($koneksi, "select * from tenaga_medis");
                                $jumlah_user = mysqli_num_rows($data_user);
                                ?>
                                <?php echo $jumlah_user; ?>
                                </h3> Tenaga Medis
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">
                                <?php
                                $data_user = mysqli_query($koneksi, "select * from poli");
                                $jumlah_user = mysqli_num_rows($data_user);
                                ?>
                                <?php echo $jumlah_user; ?>
                                </h3> Poli
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">
                                <?php
                                $data_user = mysqli_query($koneksi, "select * from pasien");
                                $jumlah_user = mysqli_num_rows($data_user);
                                ?>
                                <?php echo $jumlah_user; ?>
                                </h3> Pasien
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">
                                <?php
                                $data_user = mysqli_query($koneksi, "select * from login_admin");
                                $jumlah_user = mysqli_num_rows($data_user);
                                ?>
                                <?php echo $jumlah_user; ?>
                                </h3> Admin
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-15">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Admin</h4>

                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Herbert C. Patton
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $14,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Mathias N. Klausen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Waiting payment</td>
                                                <td>
                                                    $8,541
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Nikolaj S.
                                                    Henriksen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $954
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Lasse C. Overgaard
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                                                    Payment expired</td>
                                                <td>
                                                    $44,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Kasper S. Jessen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $8,844
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        ©
                        <script>document.write(new Date().getFullYear())</script> Fonik<span class="d-none d-sm-inline-block"> -
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
            <h6 class="mt-4">Select Custom Colors</h6>
            <div class="d-flex">
                
            <ul class="list-unstyled mb-0">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                    <label class="form-check-label" for="theme-orange">Orange</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                    <label class="form-check-label" for="theme-teal">Teal</label>
                </li>
            </ul>

            <ul class="list-unstyled mb-0 ms-4">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                    <label class="form-check-label" for="theme-purple">Purple</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                    <label class="form-check-label" for="theme-green">Green</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </li>
            </ul>

            </div>
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!--Morris Chart-->
<script src="assets/libs/morris.js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>