<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM tenaga_medis WHERE id_tenagamedis = $id");
if($sql){
	header("location:../tables-tenaga-medis.php");
 }
?>