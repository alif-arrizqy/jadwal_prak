<?php
	// Load file koneksi.php
	include "koneksi.php";
	// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
	$id = $_GET['id'];
	// Ambil Data yang Dikirim dari Form
    $id 			= $_POST['id'];
    $kd             = $_POST['kode_matkul'];
    $nama_matkul 	= $_POST['nama_matkul'];
    
    // Proses ubah data ke Database
		$query = "UPDATE tb_matkul_genap SET kode_matkul ='".$kd."', nama_matkul = '".$nama_matkul."' WHERE id ='".$id."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		  // Jika Sukses, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Berhasil Di Update!'); 
		  window.location='viewMatkul.php';
		  </script>"; 
		//   header("location: viewData.php"); // Redirect ke halaman index.php
		}else{
		  // Jika Gagal, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Gagal Di Update!'); 
		  window.location='editMatkul.php';
		  </script>"; 
        }
	
	//kembali ke data tabel
    header("location:viewMatkul.php");
?>
