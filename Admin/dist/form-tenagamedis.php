<?php
include('../../core/koneksi.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Advanced | Fonik - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">Form Tenaga Medis</h4>
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

                        <div class="card mb-3 mx-auto" style="height: 430px; width: 400px;">
                            <center>
                                <img src="../../img/TenagaMedis.png" class="card-img-top" style="height: 150px; width : 150px;margin-top: 20px;">
                            </center>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 25px; font-family: sans-serif; color: #00B98E"><b>HealthCare</b> </h5>
                                <p class="card-text">Hai admin disini kamu dapat menambahkan data diri perawat. Jangan lupa cek kembali berkas perawat dengan detail.</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Tenaga Medis</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Nama Perawat</label>
                                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama perawat" require>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Email Perawat</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Perawat" require>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Nomor STR</label>
                                                        <input type="number" name="no_str" class="form-control" id="no_str" placeholder="Nomor STR" require>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Password</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" require>
                                                    </div>
                                                    <div>
                                                        <label for="exampleFormControlInput1">Poli</label>
                                                        <select class="form-select" name="id" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <?php
                                                            $sql = mysqli_query($koneksi, "SELECT * FROM poli");
                                                            foreach ($sql as $a) :
                                                            ?>
                                                                <option value="<?= $a['id_poli']; ?>"><?= $a['nama_poli']; ?></option>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" name="btn" id="tambah">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </section>
    <!-- /.content -->
    </div>



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

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <script src="assets/js/pages/form-advanced.init.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>
<?php
include('../../core/koneksi.php');
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "INSERT INTO tenaga_medis VALUES ('','$_POST[nama]','$_POST[email]','$_POST[no_str]','$_POST[password]','$_POST[id]')");
    if ($sql) {
        echo "<script>alert('Data Tersimpan.')</script>";
    }
}
?>

<!-- <script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyC5CSgnKxpwde09kWORBHjnvg-kYrKnuU8",
        authDomain: "healthcare-mobile-37828.firebaseapp.com",
        projectId: "healthcare-mobile-37828",
        storageBucket: "healthcare-mobile-37828.appspot.com",
        messagingSenderId: "949515559092",
        appId: "1:949515559092:web:2dc80a7b656676402cb7e1"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    import {
        getFirestore,
        doc,
        getDoc,
        setDoc,
        collection,
        addDoc,
        updateDoc,
        deleteDoc,
        deleteField
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-firestore.js";

    const db = getFirestore();

    // ---------------------refrense ------------------- //

    let nama = document.getElementById("nama");
    let email = document.getElementById("email");
    let no_str = document.getElementById("no_str");
    let password = document.getElementById("password");

    let tambah = document.getElementById("tambah");
    let pilih = document.getElementById("pilih");
    let edit = document.getElementById("edit");
    let hapus = document.getElementById("hapus");


    async function AddDocument_AutoID() {
        var ref = collection(db, "users");

        const docRef = await addDoc(
                ref, {
                    Nama: nama.value,
                    Email: email.value,
                    Nostr: no_str.value,
                    Password: password.value
                }
            )
            .then(() => {
                alert("data sucsessfully added!");
            })
            .catch((error) => {
                alert("unsucsessfull operation" + error);
            });
        console.log("document id is" + docRef.id);
    }

    //custom id users

    async function AddDocument_CustomID() {
        var ref = doc(db, "users", email.value);

        await setDoc(
                ref, {
                    Nama: nama.value,
                    Email: email.value,
                    Nostr: no_str.value,
                    Password: password.value
                }
            )
            .then(() => {
                alert("data sucsessfully added!");
            })
            .catch((error) => {
                alert("unsucsessfull operation" + error);
            });
    }


    async function GetADocument() {
        var ref = doc(db, "users", email.value);
        const docSnap = await getDoc(ref);

        if (docSnap.exists()) {
            nama.value = docSnap.data().Nama;
            password.value = docSnap.data().Password;
        } else {
            alert("No such Document");
        }
    }


    async function Updatedata() {
        var ref = doc(db, "users", email.value);
        await updateDoc(
                ref, {
                    Nama: nama.value,
                    Nostr: no_str.value,
                    Password: password.value,
                }
            )
            .then(() => {
                alert("data sucsessfully Updated!");
            })
            .catch((error) => {
                alert("unsucsessfull operation" + error);
            });
    }


    async function Deletedata() {
        var ref = doc(db, "users", email.value);
        const docSnap = await getDoc(ref);

        if (!docSnap.exists()) {
            alert("data does not exist");
            return;
        }

        await deleteDoc(ref)
            .then(() => {
                alert("data delete sucsessfully");
            })
            .catch((error) => {
                alert("unsucessfull delete data" + error);
            });
    }


    tambah.addEventListener('click', AddDocument_CustomID);
    pilih.addEventListener('click', GetADocument);
    edit.addEventListener('click', Updatedata);
    hapus.addEventListener('click', Deletedata);
</script> -->