<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HealthCare</title>
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
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg" style="color:white; font-size:19px;">
                                <img src="../../img/logo.png" alt="" height="30">
                                <strong>HealthCare</strong>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">Form Pasien</h4>
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
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-bs-target="#search-wrap">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div>


                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle me-2"></i> My
                                Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">5</span><i class="dripicons-gear font-size-16 align-middle me-2"></i> Settings</a>
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
                                <i class="dripicons-blog"></i>
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
                                <li><a href="tables-jadwal.php">Jadwal</a></li>
                                <li><a href="tables-faq.php">FAQ</a></li>

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
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Form Pasien</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="background-color:#0AB885;">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-8 mx-auto" style="height: 430px; width: 400px;">
                            <center><img src="../../img/patient.png" class="card-img-top" style="height: 150px; width : 150px; margin-top: 20px;"></center>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 25px; font-family: sans-serif; color: #00B98E"><b>HealthCare</b> </h5>
                                <p class="card-text">Hai admin disini kamu dapat menambahkan data diri perawat. Jangan lupa cek berkas perwat.</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Data
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Pasien</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama</label>
                                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Paseien" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Pasien">
                                                    </div>
                                                    <div>
                                                        <label for="exampleInputEmail1">Jenis Kelamins</label>
                                                        <select class="form-select" name="jk" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="L">Laki Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Foto</label>
                                                        <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Foto">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" name="btn">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- /.content -->
            </div>

            <!-- end col -->
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
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Fonik<span class="d-none d-sm-inline-block"> -
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
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                        <label class="form-check-label" for="theme-default">Default</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                        <label class="form-check-label" for="theme-orange">Orange</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                        <label class="form-check-label" for="theme-teal">Teal</label>
                    </li>
                </ul>

                <ul class="list-unstyled mb-0 ms-4">
                    <li class="form-check">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                        <label class="form-check-label" for="theme-purple">Purple</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                        <label class="form-check-label" for="theme-green">Green</label>
                    </li>
                    <li class="form-check">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
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

    <script src="assets/libs/parsleyjs/parsley.min.js"></script>

    <script src="assets/js/pages/form-validation.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
<?php
include('../../core/koneksi.php');
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "INSERT INTO pasien VALUES ('','$_POST[nama]','$_POST[email]','$_POST[jk]','$_POST[alamat]','$_POST[foto]','$_POST[password]')");
    if ($sql) {
        echo "<script>alert('Data Tersimpan.')</script>";
    }
}
?>