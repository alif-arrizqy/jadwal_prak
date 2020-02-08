<?php
// error_reporting(0);
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$day = date('l');
$waktu = date('H:i:s');
// $waktu = $waktu.":".date("i:s");
$jsql = mysqli_query($koneksi, "select * from tb_jdwl_genap where hari = '$day' AND '$waktu' between jam_mulai and jam_selesai and lab = 'Lab. Mikrokontroller'");
$cekdata = mysqli_num_rows($jsql);
?>
<?php 
if ($cekdata > 0 ){
while($d = mysqli_fetch_array($jsql)) {
?>
<div class="alert alert-success">
  <!-- <ul class="margin-bottom-none padding-left-lg"> -->
    <h3><span class="fa fa-clock-o"></span> <?= $d['jam_mulai']." - ".$d['jam_selesai']; ?> </h3>
    <h3><span class="fa fa-book"></span><strong> <?= $d['matkul']; ?> - <?= $d['kelas']; ?></strong></h3>
    <h3><span class="glyphicon glyphicon-user"></span> <?= $d['asdos_1']." & ".$d['asdos_2']; ?> </h3>
    <h3><span class="glyphicon glyphicon-home"></span> <?= $d['lab']; ?> </h3>
  <!-- </ul> -->
</div>
<div class="tiles"></div>
<?php 
  // endwhile;
}
} else {
  echo "<td><h1> Tidak ada jadwal! </h1></td>";
} 
?>

