<?php
include 'koneksi.php';
$lb = mysqli_query($koneksi, "SELECT * FROM tb_jdwl_genap");
$row = mysqli_fetch_array($lb);
$labo = $row['lab'];
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');

$date->modify('+2 hours');
$time = $date->format('H:i:s');
// echo $time;
include 'koneksi.php';
$day = date('l');
$jsql = mysqli_query($koneksi, "select * from tb_jdwl_genap where hari = '$day' AND '$time' BETWEEN jam_mulai AND jam_selesai and lab = 'Lab. Organisasi Komputer' ");
$cekdata = mysqli_num_rows($jsql);
?>
<?php
if ($cekdata > 0) {
  while ($d = mysqli_fetch_array($jsql)) {
?>
    <article class="media event">
      <div class="media-body">
          <h3><span class="fa fa-clock-o"></span> <?= $d['jam_mulai'] . " - " . $d['jam_selesai']; ?></h3>
          <h3><span class="fa fa-book"></span> <strong> <?= $d['matkul']; ?> - <?= $d['kelas']; ?></strong></h3>
          <h3><span class="glyphicon glyphicon-user"></span> <?= $d['asdos_1'] . " & " . $d['asdos_2']; ?></h3>
          <h3><span class="glyphicon glyphicon-home"></span> <?= $d['lab']; ?></h3>
      </div>
    </article>
    <div class="tiles"></div>
<?php
    // endwhile;
  }
} else {
  echo "<td><h1> Tidak ada jadwal! </h1></td>";
}
?>