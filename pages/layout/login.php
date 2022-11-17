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
 		<p class="headlogin" style="text-align:justify;"><img src="../../img/logo.png" style="float:left;"> Healthcare </p>
 		<form method="POST" action="">
 			<center>
 				<br>
 				<br>
 				<h1>Masuk</h1>
 				<p class="garisatas">Lorem ipsum lorem</p>
 				<br>
 				<input type="text" placeholder="masukkan email anda" name="email">
 				<input type="password" placeholder="masukkan password anda" name="password">
 				<br>
 				<br>
 				<a> <button name="btn">Login</button></a>
 				<br>
 				<h5> Tidak memiliki akun? <a class="lain" href="add_admin.php">Daftar </a></h5>
 		</form>
 		</center>
 	</div>
 	<div class="right">
 		<img src="../../img/logo.png" alt="">
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
	img{
		margin-right: 30px;
	}
 </style>
 <?php
	include '../../core/koneksi.php';
	if (isset($_POST['btn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

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