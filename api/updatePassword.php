<?php
include "../core/koneksi.php";

$id = $_GET['id_pasien'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE `pasien` SET `nama` = '".$nama."', `alamat` = '".$alamat."' WHERE `pasien`.`id_pasien` = ".$id.";";
$query = mysqli_query($koneksi, $sql);
if($query){
    $msg = "Update sukses";
}else{
    $msg = "Update gagal";
}

$response = array(
    'status'=>'ok kids',
    'msg'=>$msg
);

echo json_encode($response);
?>