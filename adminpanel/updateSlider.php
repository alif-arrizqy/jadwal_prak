<?php
// Load file koneksi.php
include "koneksi.php";
$id     	= $_GET['id'];
$id     	= $_POST['id'];
$caption   	= trim($_POST['caption']);

// Cek apakah user ingin mengubah fotonya atau tidak
if (isset($_POST['ubah_foto'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	//   $fotobaru = date('dmYHis').$foto;

	$ekstensi_diperbolehkan	= array('png', 'jpg');
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];

	// Set path folder tempat menyimpan fotonya
	$path = "../images/" . $foto;
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 10240) {	//10mb	 	
			// move_uploaded_file($tmp, '../images/' . $foto);
			// Proses upload
			if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
				$query = "SELECT * FROM tb_slider WHERE id ='" . $id . "'";
				$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
				$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
				// Cek apakah file foto sebelumnya ada di folder images
				if (is_file("../images/" . $data['gambar'])) // Jika foto ada
					unlink("../images/" . $data['gambar']); // Hapus file foto sebelumnya yang ada di folder images

				// Proses ubah data ke Database
				$sql = mysqli_query($koneksi, "update tb_slider set caption ='$caption', gambar='" . $foto . "' where id='$id' ");
			}
		}
	}
} 
else { // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$sql = mysqli_query($koneksi, "update tb_slider set caption ='$caption' where id='$id' ");
}
//kembali ke data tabel
echo "<script type='text/javascript'> 
	alert('Data Berhasil Di Update!'); 
	window.location='viewAsdos.php';
	</script>";
header("location:viewSlider.php");
