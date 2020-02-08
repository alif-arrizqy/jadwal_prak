<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "select * from login where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    session_start();
    $d = mysqli_fetch_array($data);
    $_SESSION['nama'] = $d['nama'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
}else
{
    header("location:login.php?pesan=gagal");
}
?>
