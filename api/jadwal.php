<?php
include('../core/koneksi.php');
$sql = mysqli_query($koneksi, "SELECT jadwal.`jadwal_mulai`, jadwal.`jadwal_selesai`, tenaga_medis.`nama`,tenaga_medis.`no_str`,tenaga_medis.`profesi`
FROM jadwal,tenaga_medis
WHERE tenaga_medis.`id_tenagamedis` = jadwal.`id_tenagamedis`");
$data = mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($data);
?>