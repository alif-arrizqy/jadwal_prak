<?php
	include 'koneksi.php';
	$id = $_GET['id_jdwl_ganjil'];

	mysqli_query($koneksi, "delete from tb_jdwl_ganjil where id_jdwl_ganjil = '$id' ");
	header("location: viewJdwlPrak.php");
?>