<?php
session_start();
unset($_SESSION["username_umum"]);
echo "<script>alert('Anda Berhasil Logout');document.location='login_umum.php'</script>";
?>