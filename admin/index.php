<?php
require '../conn.php';
if (!isset($_SESSION['idpengguna'])) header('location: ../');
$idpengguna = $_SESSION['idpengguna'];
$sql = "SELECT admin_name FROM admin WHERE idpengguna = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpengguna);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($admin_name);
$stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h3>
        <?php echo "Selamat Datang $admin_name"; ?>
        <p><a href="../logout.php">Logout</a></p>
    </h3>
    <a href="simpan.php?">Add User</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>ID Staff</th>
            <th>ID Pengguna</th>
            <th>Staff Name</th>
            <th>Tindakan</th>
        </tr>

        <?php
        $sql = "SELECT * FROM staff";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->idstaff; ?></td>
                    <td><?php echo $row->idpengguna; ?></td>
                    <td><?php echo $row->staff_name; ?></td>
                    <td>
                        <a href="kemaskini.php?idstaff=<?php echo $row->idstaff; ?>">Edit</a>
                        |
                        <a href="padam.php?idstaff=<?php echo $row->idstaff; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                        |
                        <a href="reset.php?idstaff=<?php echo $row->idstaff; ?>">Reset</a>
                    </td>
                </tr>

        <?php
            }
        }
        ?>
    </table>
</body>

</html>