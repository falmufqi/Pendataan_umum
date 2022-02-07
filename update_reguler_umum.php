<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/logo.png">
<title>Update Reguler</title>
    <?php 
    include "koneksi.php";
    ?>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
            $nisn=$_GET['nisn'];
            $data=mysqli_query($koneksi, "SELECT * FROM siswa_reguler WHERE nisn='$nisn' ") 
            or die(mysqli_error($koneksi));
            $baris=mysqli_fetch_array($data);
        ?>
<div class="container">
<h2 align="center">Form Update Data Siswa Reguler</h2>
    <form action="prosesupdate_reguler_umum.php" method="post">
        <a href="home_umum.php?page=pagination_reguler" class="btn btn-dark mt-2">&larr;Kembali</a>
    <div class="form-group">
            <label>NISN</label>
            <input type="number" name="nisn" class="form-control" placeholder="Masukan Nisn" required>
        </div>
    
    <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Nama" required>
        </div>
   
	<div class="form-group">
            <label>Tempat</label>
            <input type="text" name="tempat" class="form-control" placeholder="Masukan Tempat" required>
        </div>
        <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" required>
            </div>

    <div class="form-group">
        <label>Jenis Kelamin</label></br>
        <input type="radio" name="jenis_kel" value="Pria"> Pria
        <input type="radio" name="jenis_kel" value="Wanita"> Wanita<br>
        </div>
  
    <label>Agama</label></br>
        <select name="agama" class="form-control" required>
			<option>--Pilih Agama--</option>
			<option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Konghuch">Konghuch</option>
              <option value="Budha">Budha</option>
            </select>

    <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="nm_ayah" class="form-control" placeholder="Masukan Nama Ayah" required>
        </div>
    <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="nm_ibu" class="form-control" placeholder="Masukan Nama Ibu" required>
        </div>
    
        <label>Pekerjaan Ayah</label></br>
        <select name="job_ayah" class="form-control" required>
			<option>--Pilih Pekerjaan--</option>
			<option value="Wiraswasta">Wiraswasta</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Buruh">Buruh</option>
              <option value="Petani">Petani</option>
              <option value="IRT">IRT</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>

        <label>Pekerjaan Ibu</label></br>
        <select name="job_ibu" class="form-control" required>
			<option>--Pilih Pekerjaan--</option>
			<option value="Wiraswasta">Wiraswasta</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Buruh">Buruh</option>
              <option value="Petani">Petani</option>
              <option value="IRT">IRT</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>

            <div class="form-group">
            <label>Kampung</label>
            <input type="text" name="kampung" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>RT/RW</label>
            <input type="text" name="rtrw" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>Desa/Kelurahan</label>
            <input type="text" name="desa" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Alamat" required>
        </div>
        
            <div class="form-group">
            <label>Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" placeholder="Masukan Alamat" required>
        </div>
        
            <div class="form-group">
            <label>Dari SLTP</label>
            <input type="text" name="dr_sltp" class="form-control" placeholder="Masukan SLTP" required>
        </div>

        <label>Jurusan</label></br>
        <select name="jurusan" class="form-control" required>
			<option >--Pilih Jurusan--</option>
			<option value="Mekanik Industri">Mekanik Industri</option>
              <option value="Pengelasan">Pengelasan</option>
              <option value="Desain Grafis">Desain Grafis</option>
              <option value="Belum Menentukan">Belum Menentukan Jurusan</option>
            </select>

            <div class="form-group">
            <label>Nomor Telpon Siswa</label>
            <input type="number" name="no_siswa" class="form-control" placeholder="Masukan Nomor Telpon">
        </div>

            <div class="form-group">
            <label>Nomor Telpon Orangtua</label>
            <input type="number" name="no_ortu" class="form-control" placeholder="Masukan Nomor Telpon">
        </div>

            <label>Program</label></br>
        <select name="program" class="form-control">
			<option value="Reguler">Reguler</option>
            </select>

            <div class="form-group">
            <label>Refrensi</label>
            <input type="text" name="refrensi" class="form-control" placeholder="Masukan Refrensi">
        </div>

        <label>Formulir</label></br>
        <select name="formulir" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>SKL</label></br>
        <select name="skl" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>KTP Orangtua</label></br>
        <select name="ktp_ortu" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>Kartu Keluarga</label></br>
        <select name="kk" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>Akta Kelahiran</label></br>
        <select name="akte" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>SKKB</label></br>
        <select name="skkb" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>KIP</label></br>
        <select name="kip" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>
            
        <label>PKH/SKTM</label></br>
        <select name="pkh" class="form-control" required>
			<option>--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>
    

        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>

    </form>
</div>
</body>
</html>