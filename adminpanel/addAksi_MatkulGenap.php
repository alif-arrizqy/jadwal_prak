<?php
include 'koneksi.php';
$kd           = $_POST['kode_matkul'];
$matkul       = $_POST['nama_matkul'];

//simpan ke db
$query = mysqli_query($koneksi, "insert into tb_matkul_genap values('','$kd','$matkul')");
if ($query) {
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='addMatkul.php'</script>";
    header("location: viewMatkul.php"); // Redirect ke halaman index.php
} else {
    // Jika Gagal, Lakukan :
    echo "<script>alert('Data Gagal Di Tambahkan!'); window.location='addMatkul.php'</script>";
}
//kembali ke data tabel
header("location:viewMatkul.php");
