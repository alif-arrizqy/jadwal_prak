<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/logowrk_kecil.png" type="image/ico">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <!-- notifikasi dari kamu -->
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                // echo "Login gagal! username dan password salah!";
                echo "<script type='text/javascript'> 
		                alert('Login Gagal! Cek Username dan Password Anda'); 
		                window.location='login.php';
                    </script>";
                    // header("location: login.php");
            } else if ($_GET['pesan'] == "logout") {
                // echo "Anda telah berhasil logout";
                echo "<script type='text/javascript'> 
		                alert('Anda Telah Logout'); 
		                window.location='login.php';
                    </script>";
                    // header("location: login.php");
            } else if ($_GET['pesan'] == "belum_login") {
                // echo "Anda harus login untuk mengakses halaman admin";
                echo "<script type='text/javascript'> 
		                alert('Anda Harus Login Dahulu'); 
		                window.location='login.php';
                    </script>";
                    // header("location: login.php");
            }
            
        }
        ?>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="cek_login.php">
                        <h1>Login</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                        <div style="margin-left: 100px">
                            <input type="submit" class="btn btn-default submit" value="Login">
                        </div>

                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                                <a class="to_register" href="#">Lost your password?</a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-cogs"></i> &nbsp; Adminpanel Jadwal Praktikum </h1>
                                <p>©2019 All Rights Reserved.
                                    Laboratorium Workshop
                                </p>
                                <p>
                                   <i class="fa fa-code"> ALIF AYATULLOH AR-RIZQY </i>
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>