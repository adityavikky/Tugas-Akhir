<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<?php
    session_start();
    session_destroy();
    echo "Keluar Berhasil";
    header("location:index.php");
?>