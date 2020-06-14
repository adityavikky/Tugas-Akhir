<?php
    $server = "localhost";
    $uname = "root";
    $pass = "";
    $database = "ftik";
    $koneksi = mysqli_connect($server,$uname,$pass,$database);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    mysqli_query($koneksi,"insert into user values ('$nama','$username','$password')");
?>

<html>
    <h1>Daftar Sukses</h1>
    <a href="index.php">Silahkan Login</a>
</html>