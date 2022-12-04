<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HealthCare</title>
	<link rel="stylesheet" type="text/css" href="../../css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="login">
		<p class="headlogin"><img src="../../img/logo.png" style="float:left;">
		<h1 class="tulisan"> Healthcare </p>
			<form method="POST" action="">
				<center>
					<br>
					<br>
					<h1>Masuk</h1>
					<!-- <p class="garisatas">admin</p> -->
					<br>
					<input type="text" placeholder="masukkan email anda" name="email">
					<input type="password" placeholder="masukkan password anda" name="password">
					<br>
					<br>
					<button name="btn">Login</button></a>
					<br>
					<h5> Tidak memiliki akun? <a class="lain" href="add_admin.php">Daftar </a></h5>
			</form>
			</center>
	</div>
	<div class="right">
		<img src="../../img/logoWhite.png" alt="">
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

	.login {
		width: 83%;
		height: 580px;
	}

	.garisatas {
		text-align: left;
		font-size: 12px;
		font-family: monsterat;
		margin: 5px;
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
		font-family: sans-serif;
	}

	.headlogin {
		height: 60px;
		width: 100px;
		margin-left: 20px;
		margin-top: 50px;
	}

	.lain {
		color: #078A73;
	}

	img {
		margin-right: 40px;
	}

	.tulisan {
		font-family: sans-serif;
		font-size: 25px;
		margin-left: 100px;
		max-width: 300px;
		max-height: 40px;
		margin-top: -60px;
		margin-bottom: 500px;
	}

	form {
		margin-left: 80px;
		margin-top: 30px;


	}

	.lain {
		color: #078A73;
	}

	.right {
		display: grid;
		background-color: #00B98E;
		margin-left: 670px;
		max-height: 700px;
		margin-top: -700px;
	}

	.right img {

		width: 330px;
		height: 180px;
		margin-left: 200px;
		margin-top: 240px;
		margin: center;
	}

	.right h1 {
		font-size: 40px;
		font-weight: bold;
		margin-left: 30px;
		color: #078A73;
		text-align: center;
		margin-top: 200px;
		font-family: sans-serif;

	}

	@media screen and (max-width: 922px) {
		.right.login {
			width: 100%;
		}
	}
</style>
<?php
include '../../core/koneksi.php';
if (isset($_POST['btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($koneksi, $username);
	$password = mysqli_real_escape_string($koneksi, $password);

	$sql = "SELECT * FROM login_admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($koneksi, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		echo "<script>alert('Login berhasil selmat datang')
        window.location.href = '../../dashboard.php'
        </script>";
	} else {
		echo "<script>alert('Email dan Password salah!!!.')
        window.location.href = '../../404.html'
        </script>";
	}
}
?>