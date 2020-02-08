<?php
include 'koneksi.php';
$hari           = $_POST['hari'];
$matkul         = $_POST['matkul'];
$kls            = $_POST['kelas'];
$asdos1         = $_POST['asdos_1'];
$asdos2         = $_POST['asdos_2'];
$lab            = $_POST['lab'];
$jam_mulai      = $_POST['jam_mulai'];
$jam_selesai    = $_POST['jam_selesai'];

//simpan ke db
$query = mysqli_query($koneksi, "INSERT INTO tb_jdwl_ganjil VALUES ('','" . $hari . "','" . $matkul . "','" . $kls . "', '" . $asdos1 . "','" . $asdos2 . "','" . $lab . "','" . $jam_mulai . "', '" . $jam_selesai . "')");
if ($query) {
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil Di Tambahkan!'); window.location='addJdwlPrak.php'</script>";
    header("location: viewJdwlPrak.php"); // Redirect ke halaman index.php
} else {
    // Jika Gagal, Lakukan :
    echo "<script>alert('Data Gagal Di Tambahkan!'); window.location='addJdwlPrak.php'</script>";
}
//kembali ke data tabel
header("location:viewJdwlPrak.php");
