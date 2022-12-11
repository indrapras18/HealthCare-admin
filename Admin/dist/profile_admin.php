<?php
include('../../core/koneksi.php');
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$sql = mysqli_query($koneksi, "SELECT * FROM login_admin WHERE id = $id");
$rows = mysqli_fetch_array($sql);
?>

<h1>Email : <?= $email; ?></h1>
<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1">email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="<?= $rows['email']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">password</label>
        <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Foto" value="<?= $rows['password']; ?>">
    </div>
</form>