<?php
	$koneksi = mysqli_connect('localhost','root','','jadwal_prak');

	if(mysqli_connect_errno())
	{
		echo "not connection to database : ".mysqli_connect_error();
	}

?>