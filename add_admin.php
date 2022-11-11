<?php
include('core/koneksi.php');
// error_reporting(0);

if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('registrasi berhasil!')
                window.location.href = 'login.php'
                </script>";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>

<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login">
        <p class="headlogin" style="text-align:justify;"><img src="img/logo.png" style="float:left;"> Healthcare </p>
        <form method="POST" action="">
            <center>
                <br>
                <br>
                <h1>Daftar</h1>
                <p class="garisatas">Lorem ipsum lorem</p>
                <br>
                <input type="text" placeholder="masukkan email anda" name="email">
                <input type="password" placeholder="masukkan password anda" name="password">
                <input type="password" placeholder="ulangi password" name="password2">
                <br>
                <br>
                <a> <button name="btn">daftar</button></a>
                <br>
                <h5> Sudah memiliki akun? <a class="lain" href="login.php">Login </a></h5>
        </form>
        </center>
    </div>
    <div class="right">
        <img src="img/logo.png" alt="">
        <br>
        <h1>HealthCare</h1>
    </div>
    </div>
</body>

</html>

<style type="text/css">
    button {
        color: white;
    }

    input {
        font-family: sans-serif;
        font-size: 15px;
        width: 350px;
        height: 40px;
    }

    button {
        width: 350px;
        height: 40px;
    }

    .headlogin {
        font-family: sans-serif;
        font-size: 30px;
    }

    .lain {
        color: #078A73;
    }
</style>