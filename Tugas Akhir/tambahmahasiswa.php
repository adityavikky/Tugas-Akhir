<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h3>Tambah Mahasiswa</h3>
    <form action="proses_tambah.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>
                    <select name="progdi" id="progdi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="gender" id="gender" style="text-transform: uppercase;">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>