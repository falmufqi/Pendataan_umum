<?php
include 'koneksi.php';

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

$query=mysqli_query($koneksi, "UPDATE siswa_reguler SET nisn='$nisn', nama_siswa='$nama_siswa', tempat='$tempat'
, tgl_lahir='$tgl_lahir', jenis_kel='$jenis_kel', agama='$agama', nm_ayah='$nm_ayah', nm_ibu='$nm_ibu'
, job_ayah='$job_ayah',job_ibu='$job_ibu', kampung='$kampung', rtrw='$rtrw', desa='$desa', kecamatan='$kecamatan'
, kabupaten='$kabupaten', dr_sltp='$dr_sltp', jurusan='$jurusan'
, no_siswa='$no_siswa', no_ortu='$no_ortu', program='$program', refrensi='$refrensi', formulir='$formulir'
, skl='$skl', ktp_ortu='$ktp_ortu', kk='$kk', akte='$akte', skkb='$skkb', kip='$kip', pkh='$pkh'
 WHERE nisn='$nisn' ")
or die(mysqli_error($koneksi));

if($query){
    echo "<script>alert('Anda Berhasil Update Data');document.location='home_umum.php'</script>";
} else{
    echo "<script>alert('Anda Gagal Update Data');document.location='home_umum.php?page=pagination_reguler_umum'</script>";
}
?>
