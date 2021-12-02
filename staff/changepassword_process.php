<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$katalaluan = $_POST['katalaluan'];

$sql = "SELECT katalaluan FROM staff WHERE idstaff =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idstaff);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows) {
    $stmt->bind_result($idstaff, $kata);
    $stmt->fetch();
    if (password_verify($katalaluan, $kata)) {
        $_SESSION['katalaluan'] = $katalaluan;
        header('location: index.php');
    } else {
        gagal();
    }
}
function gagal()
{
    ?>
    <script>
        alert('Maaf, gagal tukar katalaluan.');
        window.location = 'index.php';
    </script>
<?php
}
