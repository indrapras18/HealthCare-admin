<?php
include('../core/koneksi.php');
$sql = mysqli_query($koneksi, "SELECT tenaga_medis.`nama`,tenaga_medis.`email`,tenaga_medis.`no_str`,tenaga_medis.profesi,poli.`nama_poli`
FROM tenaga_medis,poli
WHERE tenaga_medis.`id_poli` = poli.`id_poli`");
$data = mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($data);
?>          