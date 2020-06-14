<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $progdi = $_POST['progdi'];
    $gender = $_POST['gender'];

    mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', progdi='$progdi' where id='$id'");

    header("location:datamahasiswa.php")
?>