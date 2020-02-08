<?php
include 'koneksi.php';

$nama_asdos 	= $_POST['nama_asdos'];
$foto           = $_FILES['gambar']['name'];
$tmp 			= $_FILES['gambar']['tmp_name'];

if (isset($_POST['simpan'])) {
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis') . $foto;
	// Set path folder tempat menyimpan fotonya
	$path = "../images/" . $fotobaru;
	// Proses upload
	if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
		// Proses simpan ke Database
		$query = "INSERT INTO tb_asdos VALUES('', '" . $nama_asdos . "', '" . $fotobaru . "')";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='addAsdos.php'</script>"; 
			header("location: viewAsdos.php"); // Redirect ke halaman index.php
        } else {
			// Jika Gagal, Lakukan :
			echo "<script>alert('Data Gagal Di Tambahkan!'); window.location='addAsdos.php'</script>"; 
		}
	} else {
		// Jika gambar gagal diupload, Lakukan :
		echo "<script>alert('Foto Gagal Di Upload!'); window.location='addAsdos.php'</script>"; 
	}
}
//kembali ke data tabel
header("location:viewAsdos.php");
