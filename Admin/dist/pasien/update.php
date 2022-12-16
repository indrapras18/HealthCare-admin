<?php
include('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien = $id");
$rows = mysqli_fetch_array($sql);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css ">
<link rel="stylesheet" href="../assets/css/update.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form" style="border-radius: 10px;">
    <div class="contact-image">
        <img src="../../../img/logo.png" alt="rocket_contact" />
    </div>
    <form method="post">
        <h3>Update Tenaga Medis</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Paseien" value="<?= $rows['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Pasien" value="<?= $rows['email']; ?>">
                </div>
                <div>
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="custom-select" name="jk">
                        <option selected>Open this select menu</option>
                        <option value="l">Laki Laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="<?= $rows['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Foto" value="<?= $rows['foto']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $rows['password']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"> <a href="update_pasien.php"></a></i><a href="../tables-pasien.php" style="color:white;"> Kembali</a></button>
                        <button type="submit" class="btn btn-success" name="btn"><i class="fa-regular fa-floppy-disk"></i> Simpan</button>
                    </div>

                </div>
            </div>
    </form>
</div>
<?php
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "UPDATE pasien SET nama = '$_POST[nama]',email = '$_POST[email]',jk = '$_POST[jk]',alamat = '$_POST[alamat]',foto = '$_POST[foto]', password = '$_POST[password]' WHERE id_pasien = $id");
    echo "<script>alert('Edit Berhasil')
        window.location.href = '../tables-pasien.php'
        </script>";
}
?>