<?php

include "koneksi.php";


$nisn_bea=$_POST["nisn_bea"];
$nama_siswa_bea=$_POST["nama_siswa_bea"];
$tempat_bea=$_POST["tempat_bea"];
$tgl_lahir_bea=$_POST["tgl_lahir_bea"];
$jenis_kel_bea=$_POST["jenis_kel_bea"];
$agama_bea=$_POST["agama_bea"];
$nm_ayah_bea=$_POST["nm_ayah_bea"];
$nm_ibu_bea=$_POST["nm_ibu_bea"];
$job_ayah_bea=$_POST["job_ayah_bea"];
$job_ibu_bea=$_POST["job_ibu_bea"];
$kampung_bea=$_POST["kampung_bea"];
$rtrw_bea=$_POST["rtrw_bea"];
$desa_bea=$_POST["desa_bea"];
$kecamatan_bea=$_POST["kecamatan_bea"];
$kabupaten_bea=$_POST["kabupaten_bea"];
$dr_sltp_bea=$_POST["dr_sltp_bea"];
$jurusan_bea=$_POST["jurusan_bea"];
$no_siswa_bea=$_POST["no_siswa_bea"];
$no_ortu_bea=$_POST["no_ortu_bea"];
$program_bea=$_POST["program_bea"];
$ket=$_POST["keterangan"];
$refrensi_bea=$_POST["refrensi_bea"];
$formulir_bea=$_POST["formulir_bea"];
$skl_bea=$_POST["skl_bea"];
$ktp_ortu_bea=$_POST["ktp_ortu_bea"];
$kk_bea=$_POST["kk_bea"];
$akte_bea=$_POST["akte_bea"];
$skkb_bea=$_POST["skkb_bea"];
$kip_bea=$_POST["kip_bea"];
$pkh_bea=$_POST["pkh_bea"];

  $sql="INSERT INTO siswa_beasiswa (nisn_bea, nama_siswa_bea, tempat_bea, tgl_lahir_bea, jenis_kel_bea,
   agama_bea, nm_ayah_bea, nm_ibu_bea, job_ayah_bea, job_ibu_bea, kampung_bea, rtrw_bea, desa_bea, kecamatan_bea,  
   kabupaten_bea, dr_sltp_bea, jurusan_bea, no_siswa_bea, no_ortu_bea, program_bea,keterangan, refrensi_bea, 
   formulir_bea, skl_bea, ktp_ortu_bea, kk_bea, akte_bea, skkb_bea, kip_bea, pkh_bea) VALUES
		('$nisn_bea','$nama_siswa_bea','$tempat_bea','$tgl_lahir_bea','$jenis_kel_bea','$agama_bea',
        '$nm_ayah_bea','$nm_ibu_bea','$job_ayah_bea','$job_ibu_bea','$kampung_bea','$rtrw_bea','$desa_bea',
        '$kecamatan_bea','$kabupaten_bea','$dr_sltp_bea','$jurusan_bea','$no_siswa_bea','$no_ortu_bea',
        '$program_bea','$ket','$refrensi_bea','$formulir_bea','$skl_bea','$ktp_ortu_bea','$kk_bea',
        '$akte_bea','$skkb_bea','$kip_bea','$pkh_bea')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo "<script>alert('Anda Berhasil Input Data Siswa');document.location='home_umum.php'</script>";
}else{
	echo "<script>alert('Anda Gagal Menginput Data');document.location='home_umum.php?page=input_siswa_beasiswa_umum'</script>";
}

?>