<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from mahasiswa where id='$id'");

header("location:datamahasiswa.php");

?>