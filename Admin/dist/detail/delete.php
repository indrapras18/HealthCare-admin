<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM detail_pasien WHERE id_detail_pasien = $id");
if($sql){
	header("location:../tables-detail.php");
 }
?>