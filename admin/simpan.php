<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <form action="simpan_simpan.php" method="post">
        <table>
            <tr>
                <td><label for="idpengguna">ID Pengguna</label></td>
                <td>
                    <input id="idpengguna" type="text" name="idpengguna" required />
                </td>
            </tr>
            <tr>
                <td><label for="staff_name">Staff Name</label></td>
                <td>
                    <input id="staff_name" type="text" name="staff_name" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">TAMBAH</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>