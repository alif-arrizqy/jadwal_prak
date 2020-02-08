<?php
	include 'koneksi.php';
	$id = $_GET['id'];

	mysqli_query($koneksi, "delete from tb_matkul_genap where id = '$id' ");
	header("location: viewMatkul.php");
?>