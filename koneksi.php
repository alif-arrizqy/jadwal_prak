<?php
$koneksi = mysqli_connect("localhost","root","","jadwal_prak");
//aman
if(mysqli_connect_errno()){
	echo "koneksi gagal : ".mysqli_connect_error();
}
?>
