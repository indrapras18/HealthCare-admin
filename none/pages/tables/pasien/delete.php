<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM pasien WHERE id_pasien = $id");
if($sql){
	header("location:../table_pasien.php");
 }
?>