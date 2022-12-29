<?php
include('../../core/koneksi.php');
include('Data.php');
$dt = new data();
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$sql = mysqli_query($koneksi, "SELECT * FROM login_admin WHERE id = $id");
$rows = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Data Tables | HealthCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../img/logo.png">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>

<body data-sidebar="dark">
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../../img/logo.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="../../img/logo.png" alt="" height="20">
                            </span>
                        </a>
                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../../img/logo.png" alt="" height="22">
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
                        <h4 class="page-title font-size-18">Pasien</h4>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" <?php echo "<img src='gambar/$rows[foto]'/>"; ?> </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="layout/logout.php"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
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
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="dashboard.php" class="waves-effect">
                                <i class="dripicons-device-desktop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-list"></i>
                                <span> Tables </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-tenaga-medis.php"><i class="dripicons-user-group"></i>Tenaga Medis</a></li>
                                <li><a href="tables-poli.php"><i class="dripicons-medical"></i>Poli</a></li>
                                <li><a href="tables-pasien.php"><i class="dripicons-user"></i>Pasien</a></li>
                                <li><a href="tables-jadwal.php"><i class="dripicons-to-do"></i>Jadwal</a></li>
                                <li><a href="tables-faq.php"><i class="dripicons-lightbulb"></i>FAQ</a></li>
                                <li><a href="tables-detail.php"><i class="dripicons-lightbulb"></i>Detail</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                <button style="margin-left:949px; margin-bottom:15px; background-color:#0AB885; color:white;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-regular fa-plus"></i>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success" name="btn">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th style="background-color: #0AB885; color:white;">Nomor</th>
                                                <th style="background-color: #0AB885; color:white;">ID</th>
                                                <th style="background-color: #0AB885; color:white;">Nama</th>
                                                <th style="background-color: #0AB885; color:white;">Email</th>
                                                <th style="background-color: #0AB885; color:white;">Jenis Kelmin</th>
                                                <th style="background-color: #0AB885; color:white;">Alamat</th>
                                                <th style="background-color: #0AB885; color:white;">Foto</th>
                                                <th style="background-color: #0AB885; color:white;">Password</th>
                                                <th style="background-color: #0AB885; color:white;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dt->data_pasien() as $data) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $data['id_pasien']; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= $data['email']; ?></td>
                                                    <td><?= $data['jk']; ?></td>
                                                    <td><?= $data['alamat']; ?></td>
                                                    <td align="center"><?php echo "<img src='gambar/$data[foto]' width='30' height='30' />"; ?></td>
                                                    <td style=" max-width: 100px; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?= md5($data['password']); ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger"><a style="color : white;" href="pasien/delete.php?id=<?= $data['id_pasien']; ?>">Hapus</a></button>
                                                        <button type="button" class="btn btn-warning"><a style="color : white;" href="pasien/update.php?id=<?= $data['id_pasien']; ?>">Update</a></button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
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
                            </script> HealthCare<span class="d-none d-sm-inline-block"> -
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
            <div class="p-4">
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

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
<?php
include('../../core/koneksi.php');
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "INSERT INTO pasien VALUES ('','$_POST[nama]','$_POST[email]','$_POST[jk]','$_POST[alamat]','$_POST[foto]','$_POST[password]')");
    if ($sql) {
        echo "<script>alert('data ditambahkan')
        window.location.href = 'tables-pasien.php'
        </script>";
    }
}
?>