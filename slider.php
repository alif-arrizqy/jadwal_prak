<?php
// function make_qury untuk menghubungkan dan mengambil data dari database
include 'koneksi.php';
function make_query($koneksi)
{
  $query = "SELECT * FROM tb_slider ORDER BY id ASC";
  $result = mysqli_query($koneksi, $query);
  return $result;
}

// function ini unutk menghitung data slide dan menyatakan bahwa class active itu di-aktif-kan atau tidak
// fungsi untuk slide indicator active
// <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '" class="active"></li>
// fungsi untuk s;ide indicator non-active
// <li data-target="#dynamic_slide_show" data-slide-to="' . $count . '"></li>
function slide_indicators($koneksi)
{
  
  $output = '';
  $count = 0;
  $result = make_query($koneksi);
  while ($row = mysqli_fetch_array($result)) {
    if ($count == 0) {
      $output .= '
   
   ';
    } else {
      $output .= '
   
   ';
    }
    $count = $count + 1;
  }
  return $output;
}

// function slider intuk menampilkan gambar dan caption yang ada dari database dan data di count berdasarkan slide_indicators
function slider($koneksi)
{
  $output = '';
  $count = 0;
  $result = make_query($koneksi);
  while ($row = mysqli_fetch_array($result)) {
    if ($count == 0) {
      $output .= '<div class="item active">';
    } else {
      $output .= '<div class="item">';
    }
    $output .= '
   <img src="images/' . $row["gambar"] . '" style=" margin: auto; width:600px; height:245px;"/>
   <div class="carousel-caption">
    <h3>' . $row["caption"] . '</h3>
   </div>
  </div>
  ';
    $count = $count + 1;
  }
  return $output;
}

?>
<!-- Wrapper for slides -->
<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php echo slide_indicators($koneksi); ?>
  </ol>

  <div class="carousel-inner" >
    <?php echo slider($koneksi); ?>
  </div>
  <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

</div>