<?php
include('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM tenaga_medis WHERE id_tenagamedis = $id");
$rows = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="background-color:#0AB885;">
                        <div class="card-header">
                            <h3 class="card-title" style="color : white;">Form Tenaga Medis</h3>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mx-auto">
                    <img src="../../../img/logo.png" class="card-img-top" style="height: 100px; width : 130px;">
                    <div class="card-body">
                        <h5 class="card-title"><b>HeatCare</b></h5>
                        <p class="card-text">Hai admin disini kamu dapat menambahkan data diri perawat. Jangan lupa cek berkas perwat.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit Data
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Perawat</label>
                                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Perawat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email Perawat</label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Perawat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nomor STR</label>
                                                    <input type="number" name="no_str" class="form-control" id="exampleInputPassword1" placeholder="Nomor STR">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12" data-select2-id="45">
                                                        <div class="form-group" data-select2-id="44">
                                                            <label>Poli</label>
                                                            <select name="id" class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
                                                                <?php
                                                                $sql = mysqli_query($koneksi, "SELECT * FROM poli");
                                                                foreach ($sql as $a) :
                                                                ?>
                                                                    <option value="<?= $a['id_poli']; ?>"><?= $a['nama_poli']; ?></option>
                                                                <?php
                                                                endforeach;
                                                                ?>
                                                            </select>
                                                        </div><br>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn" class="btn btn-success swalDefaultSuccess">
                                                    Simpan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php 
if (isset($_POST['btn'])) {
  $sql = mysqli_query($koneksi,"UPDATE tb_disposisi SET nomor_agenda = '$_POST[nomor_agenda]',no_surat = '$_POST[no_surat]',kepada = '$_POST[kepada]',keterangan = '$_POST[keterangan]',status_surat = '$_POST[status_surat]',tanggapan = '$_POST[tanggapan]' WHERE no_disposisi = $id");
}
 ?>