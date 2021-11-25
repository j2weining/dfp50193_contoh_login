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
</body>
</html>