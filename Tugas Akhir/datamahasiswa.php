<?php
	session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h2 style="text-align: center;">Data Mahasiswa FTIK</h2>
	<br/>
	<table>
		<tr>
			<td>
				<a href="tambahmahasiswa.php">TAMBAH MAHASISWA</a>
				<a href="logout.php">LOGOUT</a>
			</td>
		</tr>
	</table>
	<br/>
	<br/>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>NO</th>
			<th style="width: 300px;">Nama</th>
			<th style="width: 200px;">NIM</th>
			<th style="width: 200px;">Program Studi</th>
			<th style="width: 200px;">Jenis Kelamin</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr style="text-align: center;">
				<td style="width: 20px;"><?php echo $no++; ?></td>
				<td style="text-align:left"><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['progdi']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>