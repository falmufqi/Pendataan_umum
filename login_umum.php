<!DOCTYPE HTML>
<html>
    <head>
    <link rel="icon" href="img/logo.png">
        <title>Halaman Login Umum</title>
        <link rel="stylesheet" href="css/loginstyle2.css">
        <style>
          h1{
            color : #69cdf5;
            text-align : center;
            background-color : transparent;
            font-family: 'Kaushan Script', cursive;
          }
          h2{
            color : white;
            text-align : center;
            background-color:transparent;
            font-family: 'Kaushan Script', cursive;
          }
          h4{
            color : crimson;
            text-align : center;
            background-color:transparent;
            font-family: 'Kaushan Script', cursive;
          }
        </style>
    </head>
   
    <body>
      <h1>Data Buku PPDB Siswa SMK Taruna Karya 1</h1>

      <h4>Silahkan login terlebih dahulu!</h4>
        <div class="container">
          <h1>Login</h1>
            <form action="proses-login_umum.php" method="post">
                <label>Username</label><br>
                <input id="name" name="username_umum" placeholder="username" type="text"><br>
                <label>Password</label><br>
                <input id="password" name="password_umum" placeholder="**********" type="password"><br>
                <button type="submit" name="login">Login</button>
                <a href="form_daftar_umum.php" style="color:skyblue">&bull; Register</a>
            </form>
        </div>    
    </body>
</html>