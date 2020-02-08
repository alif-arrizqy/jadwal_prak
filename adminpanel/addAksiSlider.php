<?php
include 'koneksi.php';

$capt 	= $_POST['caption'];
$foto   = $_FILES['gambar']['name'];
$tmp 	= $_FILES['gambar']['tmp_name'];

if (isset($_POST['simpan'])) {
	$ekstensi_diperbolehkan	= array('png','jpg');
	// $nama = $_FILES['file']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	// $file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 10240){	//10mb	 	
			move_uploaded_file($tmp, '../images/'.$foto);
			$query = mysqli_query($koneksi, "INSERT INTO tb_slider VALUES('','$capt', '$foto')");
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}
//kembali ke data tabel
header("location:viewSlider.php");
