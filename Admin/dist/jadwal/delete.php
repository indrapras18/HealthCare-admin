<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM jadwal WHERE id_jadwal = $id");
if($sql){
	header("location:../tables-jadwal.php");
 }
?>