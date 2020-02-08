<?php
	// Load file koneksi.php
	include "koneksi.php";
	// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
	$id     = $_GET['id_asdos'];
	// Ambil Data yang Dikirim dari Form
	$id     = $_POST['id_asdos'];
	$nama   = $_POST['nama_asdos'];
	
	// Cek apakah user ingin mengubah fotonya atau tidak
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	  // Ambil data foto yang dipilih dari form
	  $foto = $_FILES['gambar']['name'];
	  $tmp = $_FILES['gambar']['tmp_name'];
	  
	  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
	  $fotobaru = date('dmYHis').$foto;
	  
	  // Set path folder tempat menyimpan fotonya
	  $path = "../images/".$fotobaru;
	  // Proses upload
	  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM tb_asdos WHERE id_asdos ='".$id."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("../images/".$data['gambar'])) // Jika foto ada
		  unlink("../images/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE tb_asdos SET nama_asdos='".$nama."',  gambar='".$fotobaru."' WHERE id_asdos ='".$id."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		  // Jika Sukses, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Berhasil Di Update!'); 
		  window.location='viewAsdos.php';
		  </script>"; 
		//   header("location: viewData.php"); // Redirect ke halaman index.php
		}else{
		  // Jika Gagal, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Gagal Di Update!'); 
		  window.location='editAsdos.php';
		  </script>"; 
		}
	  }else{
		// Jika gambar gagal diupload, Lakukan :
		echo "<script type='text/javascript'> 
		alert('Upload Foto Gagal!'); 
		window.location='editAsdos.php';
		</script>"; 
	  }
	}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	  // Proses ubah data ke Database
	  $query = "UPDATE tb_asdos SET nama_asdos='".$nama."' WHERE id_asdos ='".$id."'";
	  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		// Redirect ke halaman index.php
		echo "<script type='text/javascript'> 
		alert('Data Berhasil Di Update!'); 
		window.location='viewAsdos.php';
		</script>"; 
		// header("location: viewData.php"); 
	  }else{
		// Jika Gagal, Lakukan :
		echo "<script type='text/javascript'>  
		alert('Data Gagal Di Update!'); 
		window.location='editAsdos.php';
		</script>"; 
	  }
	}
	
	//kembali ke data tabel
	echo "<script type='text/javascript'> 
	alert('Data Berhasil Di Update!'); 
	window.location='viewAsdos.php';
	</script>"; 
	header("location:viewAsdos.php");
?>