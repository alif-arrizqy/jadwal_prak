<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edit Data Slider</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include 'sidebar.php'; ?>

      <!-- top navigation -->
      <div class="top_nav">
        <?php include 'header.php'; ?>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Data Slider</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- fungsi edit -->
                  <?php
                  include 'koneksi.php';
                  $id = $_GET['id'];
                  $data = mysqli_query($koneksi, "select*from tb_slider where id='$id'");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                    <form class="form-horizontal form-label-left" novalidate method="post" action="updateSlider.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Caption</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <!-- <textarea class="resizable_textarea form-control" placeholder="Masukan Caption disini" name="caption"> <?php echo $d['caption']; ?> </textarea> -->
                        <textarea class="form-control" name="caption" rows="3" placeholder="Isi Konten"> <?php echo $d['caption']; ?> </textarea>
                      </div>
                    </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Gambar <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                          <input class="form-control col-md-7 col-xs-12"  type="file" name="gambar">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:42%">
                        <a href="viewDataAdmin.php"><input type="submit" class="btn btn-primary" value="Cancel"></a>
                        <input id="send" type="submit" class="btn btn-success" value="Ubah" name="simpan" onclick="alertEdit()">
                      </div>
                      <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
      </div>

    </div>
  </div>
  </div>
  </form>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <?php include 'footer.php'; ?>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>
  <!-- alert -->
  <script>
    function alertEdit() {
      alert("Data Berhasil Di Ubah");
    }
  </script>
  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>
  <!-- validator -->
  <script src="vendors/validator/validator.js"></script>

</body>

</html>