<?php
include ('../core/koneksi.php');
$nama = $_POST["nama"];
$email = $_POST["email"];
$no = $_POST["no_str"];
$pass = $_POST["password"];
$id = $_POST["id_poli"];

$sql = mysqli_query($koneksi,"INSERT INTO tenaga_medis SET id_tenagamedis='',nama='$nama',email='$email',no_str='$no',password='$pass',id_poli='$id'");
if($sql){
    echo json_encode(['pesan' => 'sukses']);
}else {
    echo json_encode(['pesan' => 'gagal']);
}
?>
