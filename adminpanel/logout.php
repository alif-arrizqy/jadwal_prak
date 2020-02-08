<?php 
session_start();
session_destroy();
echo "<script type='text/javascript'> 
		  alert('Data Gagal Di Update!'); 
		  window.location='login.php';
		  </script>";
// echo "<script>alert('Anda Telah Logout'); 
// window.location='login.php'</script>"; 
header("location:login.php?pesan=logout");
?>