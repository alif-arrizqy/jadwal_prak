<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Mata Kuliah</title>

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
                                    <h2>Edit Mata Kuliah</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- <form class="form-horizontal form-label-left" method="post" action="addAksiAsdos.php" enctype="multipart/form-data"> -->
                                <?php
                                include 'koneksi.php';
                                $id = $_GET['id'];
                                $data = mysqli_query($koneksi, "select * from tb_matkul_genap where id = '$id'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <div class="x_content">
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="updateMatkulGenap.php">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Matkul <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="id" value="<?php echo $d['id']; ?>">
                                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kode_matkul" value="<?php echo $d['kode_matkul']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Matkul <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_matkul" value="<?php echo $d['nama_matkul']; ?>">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <input id="send" type="submit" class="btn btn-success" value="Simpan" name="simpan" onclick="alertEdit()">
                                                    <a href="viewMatkul.php"><input type="submit" class="btn btn-primary" value="Cancel"></a>
                                                </div>
                                            </div>
                                        </form>
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
    <!-- Alert -->
    <script>
        function alertEdit() {
            alert("Data Berhasil di Ubah");
        }
    </script>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

</body>

</html>