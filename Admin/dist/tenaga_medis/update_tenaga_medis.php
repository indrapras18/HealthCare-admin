<?php
include('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tenaga_medis WHERE id_tenagamedis = $id");
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
                    <label>Id Tenaga Medis</label>
                    <input type="number" name="id_tenagamedis" class="form-control" placeholder="ID" value="<?= $rows['id_tenagamedis']; ?>" disabled />
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $rows['nama']; ?>" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $rows['email']; ?>" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label>Nomor STR</label>
                        <input type="number" name="no_str" class="form-control" placeholder="Masukkan Nomor STR *" value="<?= $rows['no_str']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Maukkan Password *" value="<?= $rows['password']; ?>" />
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="exampleFormControlInput1">Poli</label>
                            <select class="form-select" name="poli" aria-label="Default select example">
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"> <a href="update_tenaga_medis.php"></a></i><a href="../tables-tenaga-medis.php" style="color:white;"> Kembali</a></button>
                            <button type="submit" class="btn btn-success" name="btn"><i class="fa-regular fa-floppy-disk"></i> Simpan</button>
                        </div>

                    </div>
                </div>
    </form>
</div>
<?php
if (isset($_POST['btn'])) {
    $sql = mysqli_query($koneksi, "UPDATE tenaga_medis SET nama = '$_POST[nama]',email = '$_POST[email]',no_str = '$_POST[no_str]',password = '$_POST[password]', id_poli= '$_POST[poli]' WHERE id_tenagamedis = $id");
    echo "<script>alert('Edit Berhasil')
        window.location.href = '../tables-tenaga-medis.php'
        </script>";
}
?>