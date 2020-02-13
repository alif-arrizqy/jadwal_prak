<?php
	include 'koneksi.php';
	$id = $_GET['id_asdos'];

	$unli = mysqli_query($koneksi, "select * from tb_asdos where id_asdos = '$id' ");
	$data = mysqli_fetch_array($unli);
	if (is_file("../images/". $data['gambar']))
		unlink("../images/". $data['gambar']);
	
	mysqli_query($koneksi, "delete from tb_asdos where id_asdos = '$id' ");
	header("location: viewAsdos.php");
?>