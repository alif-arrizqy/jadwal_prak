<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/logowrk_kecil.png" type="image/ico">
    <title>Tambah Mata Kuliah</title>

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
                                    <h2>Tambah Mata Kuliah</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- <form class="form-horizontal form-label-left" method="post" action="addAksiAsdos.php" enctype="multipart/form-data"> -->
                                <h4> Pilih Semester :
                                    <button type="button" class="btn btn-success klik_menu" id="tampilganjil">Ganjil</button>
                                    <button type="button" class="btn btn-success klik_menu" id="tampilgenap">Genap</button>
                                </h4>
                                <div class="x_content tampil_jdwl">

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
        function alertAdd() {
            alert("Data Berhasil di Tambahkan");
        }
    </script>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/jquery/dist/jquery.js"></script>
    <!-- tampil data  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.klik_menu').click(function() {
                var menu = $(this).attr('id');
                if (menu == "tampilganjil") {
                    $('.tampil_jdwl').load('form_tambah_matkul_ganjil.php');
                } else if (menu == "tampilgenap") {
                    $('.tampil_jdwl').load('form_tambah_matkul_genap.php');
                }
            });
            // $('.tampil_jdwl').load('tampil_ganjil.php');
        });
    </script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

</body>

</html>