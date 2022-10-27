<?php
include "../core/koneksi.php";
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

//mengambil variable untuk post
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$level = isset($_POST["level"]) ? $_POST["level"] : "";

//query insert
$sql = "INSERT INTO `users` (`email`, `password`, `level`) 
VALUES ('".$email."', '".$password."', '".$level."');";
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