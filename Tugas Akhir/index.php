<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <h3>Login</h3>
    <form action="proses_login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Masukkan Username..."></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
    </form><br>
    <a href="registrasi.php">Belum Punya Akun ?</a>
</body>
</html>