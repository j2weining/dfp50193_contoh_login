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
    <form action="login.php" method="post">
        <label for="idpengguna">ID Pengguna</label>
        <input type="text" name="idpengguna" id="idpengguna">
        <p></p>
        <label for="katalaluan">Kata Laluan</label>
        <input type="password" name="katalaluan" id="katalaluan">
        <button type="submit">MASUK</button>
    </form>
</body>

</html>