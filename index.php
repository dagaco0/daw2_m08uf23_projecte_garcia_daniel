<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici de sessió</title>
    <style>
        body{
            font-family: Arial;
        }
    </style>
</head>
<body>
    <form action="iniciarSessio.php" method="POST">
        <label for="user">Usuari</label>
        <input type="text" id="user" name="user" value="cn=admin,dc=fjeclot,dc=net" readonly><br>
        <label for="pass">Contrasenya</label>
        <input type="password" id="passowrd" name="password"><br>
        <input type="submit" value="Iniciar sessió">
    </form>
</body>
</html>