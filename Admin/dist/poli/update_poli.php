<?php
include('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM poli WHERE id_poli = $id");
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
        <h3>Update Poli</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Id Poli</label>
                    <input type="number" name="id_poli" class="form-control" placeholder="ID" value="<?= $rows['id_poli']; ?>" disabled />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>Nama Poli</label>
                        <input type="text" name="nama_poli" class="form-control" placeholder="Masukkan Nama Poli *" value="<?= $rows['nama_poli']; ?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"> <a href="update_poli.php"></a></i><a href="../tables-poli.php" style="color:white;"> Kembali</a></button>
                        <button type="submit" class="btn btn-success" name="btn"><i class="fa-regular fa-floppy-disk"></i> Simpan</button>
                    </div>

                </div>
            </div>
    </form>
</div>
<?php
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "UPDATE poli SET nama_poli = '$_POST[nama_poli]' WHERE id_poli = $id");
    echo "<script>alert('Edit data Berhasil')
        window.location.href = '../tables-poli.php'
        </script>";
}
?>