<?php
include '../../../core/koneksi.php';
session_start();
if (isset($_SESSION['email'])) {
    header("Location: ../dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthCare</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/kesehatan2.png" alt="sing up image"></figure>
                        <a href="add_admin.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btn" id="signin" class="form-submit" value="Log In" style="background-color: #0AB885;" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
if (isset($_POST['btn'])) {
    include '../../../core/koneksi.php';
    $pesan = '';
    $redirect = '';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($koneksi, $email);
    $password = mysqli_real_escape_string($koneksi, $password);

    $q = $koneksi->query("SELECT * FROM login_admin where email = '$email'");
    $get_data = mysqli_fetch_array($q);
    if (empty($get_data)) {
        $pesan = 'akun belum terdaftar';
    } else {
        if ($password != $get_data['password']) {
            echo "<script>alert('Username atau Password salah')
            window.location.href = '../../../404.html'
            </script>";
        } else {
            session_start();
            $_SESSION['id'] = $get_data['id'];
            $_SESSION['email'] = $email;
            $pesan = 'selamat bekerja';
            $redirect = '../dashboard.php';
        }
    }

    echo ("<script language= 'JavaScript'>
        window.alert ('$pesan'); window.location.href='$redirect';
        </script>");
}
?>