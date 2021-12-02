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
    <title>Tukar katalaluan</title>
</head>

<body>
    <form action="changepassword_process.php" method="post">
        <table>
            <input type="hidden" name="idstaff" value="<?php echo $row->idstaff; ?>" />
            <tr>
                <td><label for="katalaluan">Katalaluan</label></td>
                <td>
                    <input id="katalaluan" type="password" name="katalaluan" value="<?php echo $row->katalaluan; ?>" required />
                </td>
            </tr>
            <tr>
                <td><label for="katalaluanbaru">Katalaluan Baru</label></td>
                <td>
                    <input id="katalaluanbaru" type="password" name="katalaluanbaru" value="" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Tukar</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>