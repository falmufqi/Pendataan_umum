<?php

include "koneksi.php";


$nisn=$_POST["nisn"];
$nama_siswa=$_POST["nama_siswa"];
$tempat=$_POST["tempat"];
$tgl_lahir=$_POST["tgl_lahir"];
$jenis_kel=$_POST["jenis_kel"];
$agama=$_POST["agama"];
$nm_ayah=$_POST["nm_ayah"];
$nm_ibu=$_POST["nm_ibu"];
$job_ayah=$_POST["job_ayah"];
$job_ibu=$_POST["job_ibu"];
$kampung=$_POST["kampung"];
$rtrw=$_POST["rtrw"];
$desa=$_POST["desa"];
$kecamatan=$_POST["kecamatan"];
$kabupaten=$_POST["kabupaten"];
$dr_sltp=$_POST["dr_sltp"];
$jurusan=$_POST["jurusan"];
$no_siswa=$_POST["no_siswa"];
$no_ortu=$_POST["no_ortu"];
$program=$_POST["program"];
$refrensi=$_POST["refrensi"];
$formulir=$_POST["formulir"];
$skl=$_POST["skl"];
$ktp_ortu=$_POST["ktp_ortu"];
$kk=$_POST["kk"];
$akte=$_POST["akte"];
$skkb=$_POST["skkb"];
$kip=$_POST["kip"];
$pkh=$_POST["pkh"];

  $sql="INSERT INTO siswa_reguler (nisn, nama_siswa, tempat, tgl_lahir, jenis_kel, agama, nm_ayah, nm_ibu, 
  job_ayah, job_ibu, kampung, rtrw, desa, kecamatan, kabupaten, dr_sltp, jurusan, no_siswa, no_ortu, program, 
  refrensi, formulir, skl, ktp_ortu, kk, akte, skkb, kip, pkh) VALUES
		('$nisn','$nama_siswa','$tempat','$tgl_lahir','$jenis_kel','$agama','$nm_ayah','$nm_ibu','$job_ayah','$job_ibu',
    '$kampung','$rtrw','$desa','$kecamatan','$kabupaten','$dr_sltp','$jurusan','$no_siswa','$no_ortu','$program',
    '$refrensi','$formulir','$skl','$ktp_ortu','$kk','$akte','$skkb','$kip','$pkh')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo "<script>alert('Anda Berhasil Input Data Siswa');document.location='home_umum.php'</script>";
}else{
	echo "<script>alert('Anda Gagal Menginput Data');document.location='home_umum.php?page=input_siswa_reguler_umum'</script>";
}

?>