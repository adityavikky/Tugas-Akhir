<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$user = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$chek = mysqli_num_rows($user);
    if($chek>0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:datamahasiswa.php");
    }else{
        header("location:index.php");
    }
?>