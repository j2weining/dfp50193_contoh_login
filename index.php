<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="idpengguna">ID Pengguna</label>
        <input type="text" name="idpengguna" id="idpengguna">
        <p></p>
        <label for="katalaluan">Kata Laluan</label>
        <input type="password" name="katalaluan" id="katalaluan">
        <button type="submit">MASUK</button>
    </form>
    <br>
    <a href="register.php?">Register</a>
    <?php
    echo "<br>";
    echo "<p></p>";
    $pswd = password_hash('denis123',PASSWORD_BCRYPT);
    echo $pswd;
    ?>
</body>

</html>