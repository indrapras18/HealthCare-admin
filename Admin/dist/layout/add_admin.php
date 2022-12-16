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
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password2" id="re_pass" placeholder="Repeat your password" required />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="btn" id="signup" class="form-submit" value="Register" style="background-color: #0AB885;" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/kesehatan2.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
<?php
include('../../../core/koneksi.php');
error_reporting(0);
// cek validasi email
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        $sql = "SELECT * FROM login_admin WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO login_admin (email, password) VALUES ('$email', '$password')";
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

<!-- <script type="module">
    // Import the functions you need from the SDKs you need
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
    import {
        getAuth,
        createUserWithEmailAndPassword
    } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";
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
    const auth = getAuth();

    btn_submit.addEventListener('click', (e) => {

        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        createUserWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // Signed in 
                const user = userCredential.user;
                // ...
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                // ..
            });

    });
</script> -->