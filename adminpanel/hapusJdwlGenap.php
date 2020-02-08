<?php
	include 'koneksi.php';
	$id = $_GET['id_jdwl_genap'];

	mysqli_query($koneksi, "delete from tb_jdwl_genap where id_jdwl_genap = '$id' ");
	header("location: viewJdwlPrak.php");
?>