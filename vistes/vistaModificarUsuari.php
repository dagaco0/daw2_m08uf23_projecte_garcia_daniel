<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Modificar usuaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial;
        }
    </style>
    </head>
    <body>
        <form action="../index.php" method="POST">
                <input type="submit" value="Tanca la sessió">
        </form>
        <form action="../menu.php" method="POST">
                <input type="submit" value="Tornar al menu">
        </form><br>
        
        <h2>Modificar usuari</h2>
        <form action="../modificarUsuari.php" method="POST">
            <label for="uid">UID</label>
            <input type="text" id="uid" name="uid"><br>
            <label for="ou">OU</label>
            <input type="text" id="ou" name="ou"><br>
            <input type="radio" name="radio" value="uidNumber" /><label for="uidNumber">uidNumber</label>
            <input type="radio" name="radio" value="gidNumber" /><label for="gidNumber">gidNumber</label>
            <input type="radio" name="radio" value="homeDirectory" /><label for="homeDirectory">homeDirectory</label>
            <input type="radio" name="radio" value="loginShell" /><label for="loginShell">loginShell</label>
            <input type="radio" name="radio" value="cn" /><label for="cn">cn</label>
            <input type="radio" name="radio" value="sn" /><label for="sn">sn</label>
            <input type="radio" name="radio" value="givenName" /><label for="givenName">givenName</label>
            <input type="radio" name="radio" value="postalAddress" /><label for="postalAddress">postalAddress</label>
            <input type="radio" name="radio" value="mobile" /><label for="mobile">mobile</label>
            <input type="radio" name="radio" value="telephoneNumber" /><label for="telephoneNumber">telephoneNumber</label>
            <input type="radio" name="radio" value="title" /><label for="title">title</label>
            <input type="radio" name="radio" value="description" /><label for="description">description</label><br>
            <label for="nouValor">Nou valor</label>
            <input type="text" id="nouValor" name="nouValor"><br>
            <input type="submit" value="Modifica">
        </form>
    </body>
</html>