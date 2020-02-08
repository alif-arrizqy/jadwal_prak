<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Jadwal Praktikum Ganjil</title>

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
                                    <h2>Edit Jadwal Praktikum Ganjil </h2>
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
                                $id = $_GET['id_jdwl_ganjil'];
                                // $data = mysqli_query($koneksi, "select * from tb_matkul where id = '$id'");
                                // while ($d = mysqli_fetch_array($data)) {

                                $data   = mysqli_query($koneksi, "SELECT * FROM tb_jdwl_ganjil WHERE id_jdwl_ganjil='$id'");
                                $_POST  = mysqli_fetch_array($data);
                                $hari   = $_POST['hari'];
                                $matkul = $_POST['matkul'];
                                $kelas  = $_POST['kelas'];
                                $asdos1 = $_POST['asdos_1'];
                                $asdos2 = $_POST['asdos_2'];
                                $lab    = $_POST['lab'];
                                $mulai  = $_POST['jam_mulai'];
                                $selesai = $_POST['jam_selesai'];
                                ?>
                                <div class="x_content">
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="updateJdwlganjil.php">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control col-md-7 col-xs-12" name="id_jdwl_ganjil" value="<?php echo "$id"; ?>">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hari<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="hari" id="hari" class="form-control col-md-7 col-xs-12">
                                                    <option value="<?php echo $hari; ?>" selected><?php echo "$hari"; ?></option>
                                                    <option>--- Pilih ---</option>
                                                    <?php
                                                    $hari_array = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                                    $jml_hari = count($hari_array);
                                                    for ($x = 0; $x < $jml_hari; $x += 1) {
                                                    ?>
                                                        <?php if ($hari_array[$x] == $hari) { ?>

                                                        <?php } else { ?>
                                                            <option value="<?php echo $hari_array[$x]; ?>"><?php echo "$hari_array[$x]"; ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mata Kuliah<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="matkul" id="matkul" class="form-control col-md-7 col-xs-12">
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_matkul_ganjil where nama_matkul= '$matkul'");
                                                    $_POST = mysqli_fetch_assoc($data);
                                                    $matkul = $_POST['nama_matkul'];
                                                    ?>
                                                    <option value="<?php echo $matkul; ?>" selected><?php echo "$matkul"; ?></option>
                                                    <option>--- Pilih ---</option>
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_matkul_ganjil");
                                                    while ($_POST = mysqli_fetch_assoc($data)) {
                                                        $matkul = $_POST['nama_matkul'];
                                                    ?>
                                                        <option value="<?php echo $matkul; ?>"><?php echo "$matkul"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kelas<span class="required">*</span>
                                                <p>Format Penulisan (Semester/Kelas)</p>
                                            </label>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="kelas" value="<?php echo $kelas; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengajar 1<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="asdos_1" placeholder="Pengajar 1"> -->
                                                <select name="asdos1" id="asdos1" class="form-control col-md-7 col-xs-12">
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_asdos where nama_asdos='$asdos1'");
                                                    $_POST = mysqli_fetch_assoc($data);
                                                    $nama = $_POST['nama_asdos'];
                                                    ?>
                                                    <option value="<?php echo $nama; ?>" selected><?php echo "$nama"; ?></option>
                                                    <option>--- Pilih ---</option>
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_asdos");
                                                    while ($_POST = mysqli_fetch_assoc($data)) {
                                                        $nama = $_POST['nama_asdos'];
                                                    ?>
                                                        <option value="<?php echo $nama; ?>"><?php echo "$nama"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengajar 2<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="asdos2" id="asdos2" class="form-control col-md-7 col-xs-12">
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_asdos where nama_asdos='$asdos2'");
                                                    $_POST = mysqli_fetch_assoc($data);
                                                    $nama = $_POST['nama_asdos'];
                                                    ?>
                                                    <option value="<?php echo $nama; ?>" selected><?php echo "$nama"; ?></option>
                                                    <option>--- Pilih ---</option>
                                                    <?php
                                                    include 'koneksi.php';
                                                    $data = mysqli_query($koneksi, "select * from tb_asdos");
                                                    while ($_POST = mysqli_fetch_assoc($data)) {
                                                        $nama = $_POST['nama_asdos'];
                                                    ?>
                                                        <option value="<?php echo $nama; ?>"><?php echo "$nama"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Laboratorium<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="lab" placeholder="Lab. DDI / Lab. Orkom"> -->
                                                <select name="lab" id="lab" class="form-control col-md-7 col-xs-12">
                                                    <option value="<?php echo "$lab"; ?>" selected><?php echo "$lab"; ?> </option>
                                                    <option value="pilih">--- Pilih ---</option>
                                                    <option value="lab. Organisasi Komputer">Lab. Organisasi Komputer</option>
                                                    <option value="lab. Mikrokontroller">Lab. Mikrokontroller</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jam Mulai<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="time" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="jam_mulai" placeholder="Jam Mulai" value="<?php echo "$mulai"; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jam Selesai<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="time" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="jam_selesai" placeholder="Jam Selesai" value="<?php echo "$selesai"; ?>">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <input id="send" type="submit" class="btn btn-success" value="Simpan" name="simpan" onclick="alertEdit()">
                                                <a href="viewJdwlPrak.php"><input type="submit" class="btn btn-primary" value="Cancel"></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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