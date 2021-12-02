<?php
require '../conn.php';
$idstaff = $_GET['idstaff'];
$sql = "SELECT * FROM staff WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idstaff);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemas Kini</title>
</head>

<body>
    <form action="kemaskini_simpan.php" method="post">
        <table>
            <input type="hidden" name="idstaff" value="<?php echo $row->idstaff; ?>" />
            <tr>
                <td><label for="idpengguna">ID Pengguna</label></td>
                <td>
                    <input id="idpengguna" type="text" name="idpengguna" value="<?php echo $row->idpengguna; ?>" required />
                </td>
            </tr>
            <tr>
                <td><label for="staff_name">Staff Name</label></td>
                <td>
                    <input id="staff_name" type="text" name="staff_name" value="<?php echo $row->staff_name; ?>" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>