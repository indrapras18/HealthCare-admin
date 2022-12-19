<?php
include "../core/koneksi.php";
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

//mengambil variable untuk post
$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$jk = isset($_POST["jk"]) ? $_POST["jk"] : "";
$alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
$foto = isset($_POST["foto"]) ? $_POST["foto"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

//query insert
$sql = "INSERT INTO `pasien` (`nama`, `email`, `jk`, `alamat`, `foto`, `password`) 
VALUES ('".$nama."', '".$email."', '".$jk."', '".$alamat."', '".$foto."', '".$password."');";
// echo $sql;

//excute query
$query = mysqli_query($koneksi,$sql);
if ($query) {
    $msg = "masuk kids";
}else{
    $msg = "periksa lagi kids";
}
echo $msg;

//response array
$response = array(
    'status' => 'oke dek',
    'msg' => $msg
);

echo json_encode($response);
?>