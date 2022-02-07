<!DOCTYPE html>
<html>
<head>
    <?php 
    include "koneksi.php";
    ?>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center">Form Data Siswa Beasiswa</h2>
    <form action="proses_inputan_beasiswa_umum.php" method="post">
	<div class="form-group">
            <label>NISN</label>
            <input type="number" name="nisn_bea" class="form-control" placeholder="Masukan Nisn" required>
        </div>
    
    <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_siswa_bea" class="form-control" placeholder="Masukan Nama" required>
        </div>

	<div class="form-group">
            <label>Tempat</label>
            <input type="text" name="tempat_bea" class="form-control" placeholder="Masukan Tempat" required>
        </div>
        <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir_bea" required>
            </div>
    <div class="form-group">
        <label>Jenis Kelamin</label></br>
        <input type="radio" name="jenis_kel_bea" value="Pria"> Pria
        <input type="radio" name="jenis_kel_bea" value="Wanita"> Wanita<br>
        </div>
  
    <label>Agama</label></br>
        <select name="agama_bea" class="form-control" required>
			<option>--Pilih Agama--</option>
			<option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Konghuch">Konghuch</option>
              <option value="Budha">Budha</option>
            </select>

    <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="nm_ayah_bea" class="form-control" placeholder="Masukan Nama Ayah" required>
        </div>
    <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="nm_ibu_bea" class="form-control" placeholder="Masukan Nama Ibu" required>
        </div>
    
        <label>Pekerjaan Ayah</label></br>
        <select name="job_ayah_bea" class="form-control"required>
			<option >--Pilih Pekerjaan--</option>
			<option value="Wiraswasta">Wiraswasta</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Buruh">Buruh</option>
              <option value="Petani">Petani</option>
              <option value="IRT">IRT</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>

        <label>Pekerjaan Ibu</label></br>
        <select name="job_ibu_bea" class="form-control" required>
			<option >--Pilih Pekerjaan--</option>
			<option value="Wiraswasta">Wiraswasta</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Buruh">Buruh</option>
              <option value="Petani">Petani</option>
              <option value="IRT">IRT</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>

            <div class="form-group">
            <label>Kampung</label>
            <input type="text" name="kampung_bea" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>RT/RW</label>
            <input type="text" name="rtrw_bea" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>Desa/Kelurahan</label>
            <input type="text" name="desa_bea" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan_bea" class="form-control" placeholder="Masukan Alamat" required>
        </div>

            <div class="form-group">
            <label>Kabupaten</label>
            <input type="text" name="kabupaten_bea" class="form-control" placeholder="Masukan Alamat" required>
        </div>
        
            <div class="form-group">
            <label>Dari SLTP</label>
            <input type="text" name="dr_sltp_bea" class="form-control" placeholder="Masukan SLTP" required>
        </div>
        
        <label>Jurusan</label></br>
        <select name="jurusan_bea" class="form-control" required>
			<option >--Pilih Jurusan--</option>
			<option value="Mekanik Industri">Teknik Mekanik Industri</option>
              <option value="Pengelasan">Teknik Pengelasan</option>
              <option value="Desain Grafis">Teknik Desain Grafis</option>
              <option value="Belum Menentukan">Belum Menentukan Jurusan</option>
            </select>

            <div class="form-group">
            <label>Nomor Telpon Siswa</label>
            <input type="number" name="no_siswa_bea" class="form-control" placeholder="Masukan Nomor Telpon">
        </div>

            <div class="form-group">
            <label>Nomor Telpon Orangtua</label>
            <input type="number" name="no_ortu_bea" class="form-control" placeholder="Masukan Nomor Telpon">
        </div>

            <label>Program</label></br>
        <select name="program_bea" class="form-control">
			<option value="Beasiswa">Beasiswa</option>
            </select>

            <label>Keterangan</label></br>
        <select name="keterangan" class="form-control" required>
			<option>--Pilih Keterangan--</option>
			<option value="MOU">MOU</option>
            <option value="Belum MOU">Belum MOU</option>
            <option value="Mengundurkan Diri">Mengundurkan Diri</option>
            </select>

            <div class="form-group">
            <label>Refrensi</label>
            <input type="text" name="refrensi_bea" class="form-control" placeholder="Masukan Refrensi">
        </div>

        <label>Formulir</label></br>
        <select name="formulir_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>SKL</label></br>
        <select name="skl_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>KTP Orangtua</label></br>
        <select name="ktp_ortu_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>Kartu Keluarga</label></br>
        <select name="kk_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>Akta Kelahiran</label></br>
        <select name="akte_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>SKKB</label></br>
        <select name="skkb_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>

        <label>KIP</label></br>
        <select name="kip_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>
            
        <label>PKH/SKTM</label></br>
        <select name="pkh_bea" class="form-control" required>
			<option >--Pilih--</option>
			<option value="Sudah">Sudah</option>
              <option value="Belum">Belum</option>
            </select>
    

        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>

    </form>
</div>
</body>
</html>