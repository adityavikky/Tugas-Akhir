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
    <title>Edit Data</title>
</head>
<body>
    <h3>Edit Data Mahasiswa</h3>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select *from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form action="update.php" method="POST">
                <table>
                    <tr>			
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Progdi</td>
                        <td>
                            <select name="progdi" id="progdi" value="<?php echo $d['progdi']; ?>">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="gender" id="gender" value="<?php echo $d['gender']; ?>">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
    
    ?>
</body>
</html>