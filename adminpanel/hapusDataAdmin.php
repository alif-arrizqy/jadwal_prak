<?php
	include 'koneksi.php';
	$id = $_GET['id'];

	mysqli_query($koneksi, "delete from login where id='$id' ");
	header("location: viewDataAdmin.php");
?>