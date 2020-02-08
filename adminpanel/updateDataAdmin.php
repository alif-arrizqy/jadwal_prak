<?php
	include 'koneksi.php';

    $id 		= $_GET['id']; //mengambil id
    $kd         = $_POST['id'];
    $npm        = $_POST['npm'];
    $nama 		= $_POST['nama'];
    $username   = $_POST['username'];
    $pass       = $_POST['password'];

	// //menyimpan ke database
    // mysqli_query($koneksi, "update login set npm='$npm', nama='$nama', username ='$username', password =md5('$pass') where id = '$kd' ");
    
    // Cek apakah user ingin mengubah fotonya atau tidak
	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        // Ambil data foto yang dipilih dari form
        $foto = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        
        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = date('dmYHis').$foto;
        
        // Set path folder tempat menyimpan fotonya
        $path = "../img_gis/".$fotobaru;
        // Proses upload
        if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
          // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
          $query = "SELECT * FROM login WHERE id ='".$id."'";
          $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
          $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
          // Cek apakah file foto sebelumnya ada di folder images
          if(is_file("../img_gis/".$data['gambar'])) // Jika foto ada
            unlink("../img_gis/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
          
          // Proses ubah data ke Database
          $query = "UPDATE login SET npm='".$npm."', nama='".$nama."', username ='".$username."', pass = md5('".$pass."'), gambar='".$fotobaru."' WHERE id ='".$kd."'";
          $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
          if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo "<script type='text/javascript'> 
            alert('Data Berhasil Di Update!'); 
            window.location='viewDataAdmin.php';
            </script>"; 
          //   header("location: viewData.php"); // Redirect ke halaman index.php
          }else{
            // Jika Gagal, Lakukan :
            echo "<script type='text/javascript'> 
            alert('Data Gagal Di Update!'); 
            window.location='viewDataAdmin.php';
            </script>"; 
          }
        }else{
          // Jika gambar gagal diupload, Lakukan :
          echo "<script type='text/javascript'> 
          alert('Upload Foto Gagal!'); 
          window.location='viewDataAdmin.php';
          </script>"; 
        }
      }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        // $query = "UPDATE peta SET nama_mall='".$nama_mall."', alamat_mall='".$alamat_mall."', deskripsi='".$deskripsi."', no_telp='".$telp."', jam_buka='".$jam_buka."', latitude='".$lat."', longitude='".$long."' WHERE id ='".$id."'";
        $query = "UPDATE login SET npm='".$npm."', nama='".$nama."', username ='".$username."', pass = md5('".$pass."') WHERE id ='".$kd."'";
        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          // Redirect ke halaman index.php
          echo "<script type='text/javascript'> 
          alert('Data Berhasil Di Update!'); 
          window.location='viewDataAdmin.php';
          </script>"; 
          // header("location: viewData.php"); 
        }else{
          // Jika Gagal, Lakukan :
          echo "<script type='text/javascript'>  
          alert('Data Gagal Di Update!'); 
          window.location='viewDataAdmin.php';
          </script>"; 
        }
      }
      
      //kembali ke data tabel
      echo "<script type='text/javascript'> 
      alert('Data Berhasil Di Update!'); 
      window.location='viewData.php';
      </script>"; 
      header("location:viewDataAdmin.php");
?>