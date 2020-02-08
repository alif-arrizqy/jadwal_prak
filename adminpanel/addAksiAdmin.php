<?php
include 'koneksi.php';
$npm 		= $_POST['npm'];
$nama 		= $_POST['nama'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$foto 		= $_FILES['gambar']['name'];
$tmp 		= $_FILES['gambar']['tmp_name'];

if (isset($_POST['simpan'])) {
	// 	// Proses simpan ke Database
	// 	$query = "INSERT INTO login VALUES('', '" . $npm . "', '" . $nama . "', '" . $username . "', MD5('" .$password . "'), '" . $fotobaru . "')"; 
	// 	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	// 		if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
	// 			// Jika Sukses, Lakukan :
	// 			echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='viewData.php'</script>"; 
	// 			header("location: viewData.php"); // Redirect ke halaman index.php
	// 		} else {
	// 			// Jika Gagal, Lakukan :
	// 			echo "<script>alert('Data Gagal Di Tambahkan!'); window.location='viewData.php'</script>"; 
	// 		}
	// }
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis') . $foto;
	// Set path folder tempat menyimpan fotonya
	$path = "../img_gis/" . $fotobaru;
	// Proses upload
	if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
		// Proses simpan ke Database
		$query = "INSERT INTO login VALUES('', '" . $npm . "', '" . $nama . "', '" . $username . "', MD5('" . $password . "'), '" . $fotobaru . "')";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='viewData.php'</script>";
			header("location: viewData.php"); // Redirect ke halaman index.php
		} else {
			// Jika Gagal, Lakukan :
			echo "<script>alert('Data Gagal Di Tambahkan!'); window.location='viewData.php'</script>";
		}
	} else {
		// Jika gambar gagal diupload, Lakukan :
		echo "<script>alert('Foto Gagal Di Upload!'); window.location='viewData.php'</script>";
	}
}
//kembali ke data tabel
header("location:viewDataAdmin.php");
