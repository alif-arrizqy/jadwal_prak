<?php
$koneksi = mysqli_connect("localhost","root","","jadwal_prak");
//tes
if(mysqli_connect_errno()){
	echo "koneksi gagal : ".mysqli_connect_error();
}
?>
