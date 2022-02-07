<html>
	<?php 
	session_start();
	?>
<head>
<link rel="icon" href="img/logo.png">
<title>Program Aplikasi PPDB Data Siswa</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: relative;
    top: 0.5em;
    left: 1em;
    width: 11em;
}
ul.navbar li {
    background: #E6E6FA;
    margin: 0.5em 0;
    padding: 0.3em;
    border-right: 0.5em solid #9932CC;
}
ul.navbar a {
    text-decoration: none;
}
h1 {
    font-family: Helvetica, Geneva, Arial, Sans-Regular, sans-serif
}
address {
    margin-top: 1em;
    padding-top: 1em;
    border-top: thin dotted
}
	a:link,a:visited,a:active {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	text-decoration: none;
}
a:hover {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: blue;
	text-decoration: none;
}
header{
	font-family: Arial;
	color: white;
}
</style>
</head>
<body>
<br>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#2F4F4F">&nbsp;</td>
	<td width="140" height="120" bgcolor="#2F4F4F"><div align="center"><img src="img/logo.png" width="130" height="130"></div></td>
	<td width="10" bgcolor="#2F4F4F">&nbsp;</td>
	<td width="1136" bgcolor="#2F4F4F"><div align="center"><span class="header" style="color:white; font-style:Arial">APLIKASI DATA BUKU PPDB SISWA<br><br></span>
	<b style="color:white; font-style:Arial">SMK Taruna Karya 1 Karawang</b><span class="header"><br></span></div></td>
	<td width="10" bgcolor="#2F4F4F"></td>
</tr>
<tr bgcolor="#DCDCDC">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><strong><?php echo "Tanggal : ".date("d-M-y");?></strong></div></td>
	<td>&nbsp;</td>
	<td align="center">Selamat Datang&nbsp;<font color="#FF6600"><strong> <?=$_SESSION['username_umum']?></strong></font>&nbsp;|&nbsp;<a href="logout_umum.php">LogOut >>&nbsp;&nbsp;</a></td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#DCDCDC">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"><table width="144" height="2360" bgcolor="#2F4F4F" border="0" cellspacing="0" cellpadding="0" align="top">
		<tr>
		<td valign="top"><ul class="navbar">
			<li><a href="home_umum.php"><b>MAIN MENU</b></a></li><br>
			<li><a href="home_umum.php?page=input_siswa_reguler" title="input-siswa-reguler">&nbsp;Input Siswa Reguler</a></li>
			<li><a href="home_umum.php?page=input_siswa_beasiswa" title="input-siswa-beasiswa">&nbsp;Input Siswa Beasiswa</a></li>
			<li><a href="home_umum.php?page=pagination_reguler" title="lihat_siswa_reguler">&nbsp;View Data Reguler</a></li>
			<li><a href="home_umum.php?page=pagination_beasiswa" title="lihat-siswa-beasiswa">&nbsp;View Data Beasiswa</a></li><br>
		</ul></td>
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="2360" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'home' : include "home_umum.php"; break;
				case 'input_siswa_reguler' : include "input_siswa_reguler_umum.php"; break;
				case 'pagination_reguler' : include "pagination_reguler_umum.php"; break;
				case 'delete_reguler' : include "delete_reguler_umum.php"; break;
				case 'update_reguler' : include "update_reguler_umum.php"; break;
				case 'input_siswa_beasiswa' : include "input_siswa_beasiswa_umum.php"; break;
				case 'pagination_beasiswa' : include "pagination_beasiswa_umum.php"; break;
				case 'delete_beasiswa' : include "delete_beasiswa_umum.php"; break;
				case 'update_beasiswa' : include "home_umum.php?page=pagination_beasiswa"; break;
				case 'main' :
				include 'petunjuk_umum.php';	
				include 'aboutuser_umum.php';	
					
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#DCDCDC">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#DCDCDC">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#DCDCDC">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#DCDCDC">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#7FFF00">
	<td height="36" colspan="5" bgcolor="#2F4F4F"><div align="center" style="margin:0 10px 0 0;"><font color="#000">Copyright &copy; 2021 FBN</font><br></div></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>