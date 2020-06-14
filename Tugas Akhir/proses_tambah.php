<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $progdi = $_POST['progdi'];
    $gender = $_POST['gender'];

    mysqli_query($koneksi,"insert into mahasiswa values ('','$nama','$nim','$progdi','$gender')");

    header("location:datamahasiswa.php")

?>