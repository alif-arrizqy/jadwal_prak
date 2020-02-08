<?php
	// Load file koneksi.php
	include "koneksi.php";
	$id = $_GET['id_jdwl_ganjil'];
	// Ambil Data yang Dikirim dari Form
    $id 		= $_POST['id_jdwl_ganjil'];
    $hari       = $_POST['hari'];
    $matkul     = $_POST['matkul'];
    $kelas      = $_POST['kelas'];
    $asdos1     = $_POST['asdos1'];
    $asdos2     = $_POST['asdos2'];
    $lab        = $_POST['lab'];
    $mulai      = $_POST['jam_mulai'];
    $selesai    = $_POST['jam_selesai'];
    
    // Proses ubah data ke Database
		$query = "UPDATE tb_jdwl_ganjil SET hari = '".$hari."', matkul = '".$matkul."', kelas = '".$kelas."', 
        asdos_1 = '".$asdos1."', asdos_2 =  '".$asdos2."', lab = '".$lab."', jam_mulai = '".$mulai."', 
        jam_selesai = '".$selesai."' WHERE id_jdwl_ganjil ='".$id."'";
        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		  // Jika Sukses, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Berhasil Di Update!'); 
		  window.location='viewJdwlPrak.php';
		  </script>"; 
		//   header("location: viewData.php"); // Redirect ke halaman index.php
		}else{
		  // Jika Gagal, Lakukan :
		  echo "<script type='text/javascript'> 
		  alert('Data Gagal Di Update!'); 
		  window.location='editJdwlGanjil.php';
		  </script>"; 
        }
	
	//kembali ke data tabel
    header("location:viewJdwlPrak.php");
