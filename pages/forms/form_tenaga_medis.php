<?php
include "../../core/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index.php" class="brand-link">
                <img src="../../dist/img/logoWhite1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HealthCare</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../dashboard.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                        </li>

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../forms/form_tenaga_medis.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tenaga Medis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../forms/form_poli.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../forms/form_pasien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pasien</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/table_tenaga_medis.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Tenaga Medis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/table_poli.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/table_pasien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table Pasien</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Form Perawat</h1>
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
                                <div class="card-header">
                                    <h3 class="card-title" style="color : white;">Form Tenaga Medis</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-auto"style="height: 430px; width: 400px;">
                            <center>
                            <img src="../../img/dokter.png" class="card-img-top" style="height: 200px; width : 200px;"></center>
                            <div class="card-body">
                                <h5 class="card-title"style= "font-size: 25px; font-family: sans-serif; color: #00B98E"><b>HealthCare</b> </h5>
                                <p class="card-text">Hai admin disini kamu dapat menambahkan data diri perawat. Jangan lupa cek kembali berkas perawat dengan detail.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"style="margin-left : 200px;margin-top: 15px;">
                                    Tambah Data
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Poli</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama Perawat</label>
                                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Perawat" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Perawat</label>
                                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Perawat">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Nomor STR</label>
                                                            <input type="number" name="no_str" class="form-control" id="exampleInputPassword1" placeholder="Nomor STR">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12" data-select2-id="45">
                                                                <div class="form-group" data-select2-id="44">
                                                                    <label>Poli</label>
                                                                    <select name="id" class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
                                                                        <?php
                                                                        $sql = mysqli_query($koneksi, "SELECT * FROM poli");
                                                                        foreach ($sql as $a) :
                                                                        ?>
                                                                            <option value="<?= $a['id_poli']; ?>"><?= $a['nama_poli']; ?></option>
                                                                        <?php
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div><br>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="btn" class="btn btn-success swalDefaultSuccess">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    type: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });
    </script>
</body>

</html>
<?php
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "INSERT INTO tenaga_medis VALUES ('','$_POST[nama]','$_POST[email]','$_POST[no_str]','$_POST[password]','$_POST[id]')");
    if ($sql) {
        echo "<script>alert('Data Tersimpan.')</script>";
    }
}
?>