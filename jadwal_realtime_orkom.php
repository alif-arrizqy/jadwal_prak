<?php
// error_reporting(0);
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$day = date('l');
$waktu = date('H:i:s');
// $waktu = $waktu.":".date("i:s");
$jsql = mysqli_query($koneksi, "select * from tb_jdwl_genap where hari = '$day' AND '$waktu' between jam_mulai and jam_selesai and lab = 'Lab. Organisasi Komputer'");
$cekdata = mysqli_num_rows($jsql);
?>

<?php
// include 'koneksi.php';
if ($cekdata > 0) {
  while ($d = mysqli_fetch_array($jsql)) {
    $asd1 = $d['asdos_1'];
    $asd2 = $d['asdos_2'];
?>
    <?php
    $gb = mysqli_query($koneksi, "select * from tb_asdos order by nama_asdos = '$asd1'");
    while ($gam = mysqli_fetch_array($gb)) {
      $nm = $gam['nama_asdos'];
      $gbr = $gam['gambar'];
      if ($asd1 == $nm) {
        $profile1 = $gbr;
    ?>
        <?php
        $gb = mysqli_query($koneksi, "select * from tb_asdos order by nama_asdos = '$asd1'");
        while ($gam = mysqli_fetch_array($gb)) {
          $nm = $gam['nama_asdos'];
          $gbr = $gam['gambar'];
          if ($asd2 == $nm) {
           $profile2 = $gbr;
        ?>

            <div class="alert alert-success">
              <div class="profile_pic">
                <img src="images/<?php echo $profile1; ?>" alt="..." class="img-circle profile_img" style="margin-left: 50px">
              </div>
              <div class="profile_pic">
                <img src="images/<?php echo $profile2; ?>" alt="..." class="img-circle profile_img" style="margin-left: 60px">
              </div>
      <?php }
        }
      }
    } ?>
      <br><br><br><br><br><br><br><br>
      <h3><span class="fa fa-clock-o"></span> <?= $d['jam_mulai'] . " - " . $d['jam_selesai']; ?> </h3>
      <h3><span class="fa fa-book"></span> <strong><?= $d['matkul']; ?> - <?= $d['kelas']; ?></strong></h3>
      <h3><span class="glyphicon glyphicon-user"></span> <?= $asd1 . " & " . $asd2 ?> </h3>
      <h3><span class="glyphicon glyphicon-home"></span> <?= $d['lab']; ?> </h3>
            </div>
            <div class="tiles"></div>
        <?php
        // endwhile;
      }
    } else {
      echo "<td><h1> Tidak ada jadwal! </h1></td>";
    }
        ?>