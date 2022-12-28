<?php
include('../../../core/koneksi.php');
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$sql = mysqli_query($koneksi, "SELECT * FROM login_admin WHERE id = $id");
$rows = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title> edite Profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/profile.css">
</head>

<body>
    <form action="" method="post">
        <div class="container rounded bg-white mt-5 mb-5" style="height: 520px;">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-9 py-5"><img class="rounded-circle mt-5" width="170px" <?php echo "<img src='../gambar/$rows[foto]'/>"; ?><span class="font-weight-bold"><?= $rows['username'] ?></span><span class="text-black-50"><?= $rows['email'] ?></span><span> </span></div>
                </div>
                <div class="col-md-6" style="margin-left: 95px;">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="" value="<?= $rows['username']; ?>"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email" name="email" class="form-control" placeholder="" value="<?= $rows['email']; ?>"></div>
                            <div class="col-md-12"><label class="labels">Foto</label><input type="file" name="foto" class="form-control" placeholder="" value="<?= $rows['foto']; ?>"></div>
                            <div class="col-md-12"><label class="labels">Password</label><input type="Password" name="password" class="form-control" placeholder="" value="<?= $rows['password']; ?>"></div>
                            <br>
                            <br>
                            <br>
                            <div class="button mt-5 text-right">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i><a href="../profile_admin.php" style="color: white; text-decoration:none;"> Close</a></button>
                                <button type="submit" class="btn btn-primary profile-button" name="btn"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</body>

</html>

<?php
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "UPDATE login_admin SET username = '$_POST[username]', email = '$_POST[email]', foto = '$_POST[foto]', password = '$_POST[password]' WHERE id = $id");
    echo "<script>alert('Edit data Berhasil')
        window.location.href = '../profile_admin.php'
        </script>";
}
?>