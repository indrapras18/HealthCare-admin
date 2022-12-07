<?php
include ('../../../core/koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM faq WHERE id_faq = $id");
if($sql){
	header("location:../tables-faq.php");
 }
?>