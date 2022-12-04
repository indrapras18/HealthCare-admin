<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM poli WHERE id_poli = $id");
if($sql){
	header("location:../table_poli.php");
 }
?>