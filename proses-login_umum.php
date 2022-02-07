<?php
$username_umum = $_POST['username_umum'];
$password_umum = $_POST['password_umum'];
$query = new mysqli('localhost', 'root', '', 'db_tk1');

$result = $query->query("SELECT * FROM login_umum WHERE username_umum='$username_umum'");
$row = $result->fetch_assoc();

if (!$row) {
    echo "<script>alert('Username atau Password anda Salah!');document.location = 'login_umum.php'</script>";
} else {
    $res_username_umum = $row['username_umum'];
    $res_password_umum = $row['password_umum'];


    if (password_verify($password_umum, $res_password_umum)) {
        session_start();
        $_SESSION['username_umum'] = $username_umum;
        $_SESSION['password_umum'] = $password_umum;
        echo "<script>alert('Anda Berhasil Login');document.location = 'home_umum.php'</script>";
    } else {
        echo "<script>alert('Username atau Password anda Salah!');document.location = 'login_umum.php'</script>";
    }
}
