<?php
include ('../core/koneksi.php');
$nama = $_POST["nama"];
$email = $_POST["email"];
$no = $_POST["no_str"];
$prof = $_POST["profesi"];
$pass = $_POST["password"];
// $id = $_POST["id_poli"];

$sql = mysqli_query($koneksi,"insert into tenaga_medis set nama='$nama',email='$email',no_str='$no',profesi='$prof',password='$pass'");
if($sql){
    echo json_encode(['pesan' => 'sukses']);
}else {
    echo json_encode(['pesan' => 'gagal']);
}
?>
