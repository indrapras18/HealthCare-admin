<?php
include('../core/koneksi.php');
$sql = mysqli_query($koneksi, "SELECT * FROM tenaga_medis");
$data = mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($data);
?>