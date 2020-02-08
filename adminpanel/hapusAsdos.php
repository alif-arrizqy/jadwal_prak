<?php
	include 'koneksi.php';
	$id = $_GET['id_asdos'];

	mysqli_query($koneksi, "delete from tb_asdos where id_asdos = '$id' ");
	header("location: viewAsdos.php");
?>