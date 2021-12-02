<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$katalaluan = password_hash('abc123', PASSWORD_BCRYPT);

$sql = "UPDATE staff SET katalaluan = ? WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $katalaluan, $idstaff);
$stmt->execute();

if ($conn->error) {
?>
    <script>
        alert('Maaf! Katalaluan');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
