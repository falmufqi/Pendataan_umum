<?php

include "koneksi.php";
session_start();

$nik_umum=$_POST["nik_umum"];
$nama_umum=$_POST["nama_umum"];
$jk_umum=$_POST["jk_umum"];
$posisi_umum=$_POST["posisi_umum"];
$username_umum=$_POST["username_umum"];
$password_umum=password_hash($_POST["password_umum"],PASSWORD_BCRYPT);

  $sql="insert into login_umum (nik_umum,nama_umum,jk_umum,posisi_umum,username_umum,password_umum) values
		('$nik_umum','$nama_umum','$jk_umum','$posisi_umum','$username_umum','$password_umum')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo "<script>alert('Anda Berhasil Daftar');document.location = 'login_umum.php'</script>";
	exit;
  }
else {
	echo "<script>alert('Anda Gagal Daftar');document.location = 'form_daftar_umum.php'</script>";
	exit;
}  

?>