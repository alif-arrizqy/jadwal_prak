<?php
	include 'koneksi.php';
	$id = $_GET['id'];

	$unli = mysqli_query($koneksi, "select * from tb_slider where id = '$id' ");
	$data = mysqli_fetch_array($unli);
	if (is_file("../images/". $data['gambar']))
		unlink("../images/". $data['gambar']);
	
	mysqli_query($koneksi, "delete from tb_slider where id = '$id' ");
	header("location: viewSlider.php");
?>