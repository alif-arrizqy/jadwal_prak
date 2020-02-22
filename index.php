<!-- author by; Alif Ayatulloh Ar-Rizqy 9 February 2020 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- setiap 1 menit akan refresh -->
  <meta http-equiv='Refresh' content="60; URL=index.php"> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logowrk_kecil.png" type="image/ico" />
  <title>Jadwal Praktikum Workshop </title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
  <!-- Akan me-refresh halam apabila jam aktual samadengan jadwal -->
  <?php 
    date_default_timezone_set('Asia/Jakarta');
    $time = date('H:i');

    $jdw1 = "07:30";
    $jdw2 = "09:00";
    $jdw3 = "10:30";
    $jdw4 = "13:00";
    $jdw5 = "14:30";
    $jdw6 = "16:00";

    if($time == $jdw1) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
      // $url=$_SERVER['REQUEST_URI']; 
      // header("Refresh: 10; URL=$url");
    }
    if($time == $jdw2) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
    }
    if($time == $jdw3) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
    }
    if($time == $jdw4) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
    }
    if($time == $jdw5) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
    }
    if($time == $jdw6) {
      echo "<meta http-equiv='Refresh' content='60; URL=index.php' />";
    }
   ?>
   <!-- THE END AUTO REFRESH -->
</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000); zoom();" class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-at"></i> <span>WORKSHOP</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li class="site_title">&nbsp;<span id="clock"></span> WIB </li>
                <li><a><h4><?php echo " " . theday(); " " . tanggalmaen() ?></h4></a></li>
                <li><a><h4> <span>Belum punya Aplikasi Absen Workshop ? Scan sekarang juga! </span> </h4></a></li>
                <li><a><img src="images/scan-me.jpg" alt="www.workshop.com" style="width: 200px; height: 300px;"></a></li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>
      <!-- page content -->
      <div class="right_col">
        <div class="">
          <div class="row">
            <div class="col-md-8 pull-right">
              <div class="dashboard_graph x_panel">
                <div class="row x_title">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <h2> <span class="fa fa-send"></span> <b> Workshop Activities </span></h2>
                  </div>
                </div>
                <div class="x_content">
                  <div class="demo-container" style="height: 300px">
                    <!-- <div class="bs-example" data-example-id="simple-jumbotron"> -->
                      <!-- <div class="jumbotron"> -->
                    <!-- slider.php -->
                        <?php include 'slider.php'; ?>
                      <!-- </div> -->
                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- BATAS PULL RIGHT-->
            <!-- JADWAL LANGUSNG BAG.ATAS -->
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel " style="margin-left: 10px;">
                  <div class="x_title">
                    <h2><span class="fa fa-bell"></span> <b>Jadwal Yang Sedang Berlangsung</b></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php include 'jadwal_realtime_orkom.php'; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- BATAS JADWAL LANGUSNG BAG. ATAS -->
          </div>
          <!-- BATAS KONTEN ATAS -->
          <!-- MULAI KONTEN BAWAH -->
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="x_panel" >
                <div class="x_title">
                  <h2><span class="fa fa-bell"></span> <b>Jadwal Yang Sedang Berlangsung </b></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <?php include 'jadwal_realtime_ddi.php'; ?>
                </div>
              </div>
            </div>

            <div class="col-md-4 pull-right">
              <div class="x_panel" style="height: 400px">
                <div class="x_title">
                  <h2><span class="fa fa-calendar"></span> <b>Jadwal Selanjutnya </b></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron" style="height: 300px">
                  <?php include 'jadwal_selanjutnya_orkom.php'; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pull-right">
              <div class="x_panel" style="height: 400px">
                <div class="x_title">
                  <h2><span class="fa fa-bell"></span> <b>Jadwal Selanjutnya </b></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron" style="height: 300px">
                  <?php include 'jadwal_selanjutnya_ddi.php'; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- BATAS KONTEN BAWAH -->
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          &copy Copyright 2019 <a href="https://www.workshop.com">Laboratorium Workshop</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>
  <!-- Zoom in -->
  <script type="text/javascript">
    function zoom() {
      document.body.style.zoom = "100%"
    }
  </script>

  <!-- HARI DAN TANGGAL -->
  <?php
  function theday()
  {
    date_default_timezone_set('Asia/Jakarta');
    $hari = date('l');
    if ($hari == "Sunday") {
      echo "Minggu";
    } elseif ($hari == "Monday") {
      echo "Senin";
    } elseif ($hari == "Tuesday") {
      echo "Selasa";
    } elseif ($hari == "Wednesday") {
      echo "Rabu";
    } elseif ($hari == "Thursday") {
      echo ("Kamis");
    } elseif ($hari == "Friday") {
      echo "Jum'at";
    } elseif ($hari == "Saturday") {
      echo "Sabtu";
    }
  }
  ?>
  <?php
  function tanggalmaen()
  {
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('d');
    echo $tgl;
    $bulan = date('F');
    if ($bulan == "January") {
      echo " Januari ";
    } elseif ($bulan == "February") {
      echo " Februari ";
    } elseif ($bulan == "March") {
      echo " Maret ";
    } elseif ($bulan == "April") {
      echo " April ";
    } elseif ($bulan == "May") {
      echo " Mei ";
    } elseif ($bulan == "June") {
      echo " Juni ";
    } elseif ($bulan == "July") {
      echo " Juli ";
    } elseif ($bulan == "August") {
      echo " Agustus ";
    } elseif ($bulan == "September") {
      echo " September ";
    } elseif ($bulan == "October") {
      echo " Oktober ";
    } elseif ($bulan == "November") {
      echo " November ";
    } elseif ($bulan == "December") {
      echo " Desember ";
    }
    $tahun = date('Y');
    echo $tahun;
  }
  ?>
  <!-- WAKTU -->
  <script type="text/javascript">
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function tampilkanwaktu() {
      //buat object date berdasarkan waktu saat ini
      var waktu = new Date();
      //ambil nilai jam, 
      //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
      var sh = waktu.getHours() + "";
      //ambil nilai menit
      var sm = waktu.getMinutes() + "";
      //ambil nilai detik
      var ss = waktu.getSeconds() + "";
      //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
      document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
  </script>
</body>
</html>