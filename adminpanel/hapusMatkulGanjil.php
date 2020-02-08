<?php
	include 'koneksi.php';
	$id = $_GET['id'];

	mysqli_query($koneksi, "delete from tb_matkul_ganjil where id = '$id' ");
	header("location: viewMatkul.php");
?>