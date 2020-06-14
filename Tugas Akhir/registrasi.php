<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h3>Tambah User</h3>
    <form action="tambah_user.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
        </table>
        <input type="submit" value="Daftar">
    </form>
</body>
</html>