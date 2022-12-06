<?php
include ('../core/koneksi.php');
$nama = $_POST["nama"];
$email = $_POST["email"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$foto = $_POST["foto"];
$password = $_POST["password"];
$data = mysqli_query($koneksi, "insert into pasien set nama='$nama',email='$email',jk='$jk',alamat='$alamat',foto='$foto',password='$password'");
if($data){
    echo json_encode(['pesan' => 'sukses']);
}else {
    echo json_encode(['pesan' => 'gagal']);
}

?>