<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/logo.png">
<title>Daftar Akun Umum</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center"><font face="Tahoma" color="black">Form Pendaftaran</font></h2>
    <form action="proses_pendaftar_umum.php" method="post">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik_umum" class="form-control" placeholder="Masukan NIK" required/>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_umum" class="form-control" placeholder="Masukan Nama" required/>
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label></br>
        <input type="radio" name="jk_umum" value="Pria"> Pria
        <input type="radio" name="jk_umum" value="Wanita"> Wanita<br>
        </div>
        <div class="form-group">
            <label>Posisi</label>
            <input type="text" name="posisi_umum" class="form-control" placeholder="Masukan Alamat" required />
        </div>
	<div class="form-group">
            <label>Username</label>
            <input type="text" name="username_umum" class="form-control" placeholder="Masukan Username" required/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password_umum" class="form-control" placeholder="Masukan Password" required/>
        </div>
	
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        <a href="login_umum.php" class="btn btn-success btn-block">Kembali</a>

    </form>
</div>
</body>
</html>