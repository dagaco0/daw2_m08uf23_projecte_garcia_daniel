<?php
?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Esborrar usuaris</title>
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
        <h2>Esborrar usuari</h2>
        <form action="../esborrarUsuaris.php" method="POST">
            <label for="uid">UID</label>
            <input type="text" id="uid" name="uid"><br>
            <label for="ou">OU</label>
            <input type="text" id="ou" name="ou"><br>
            <input type="submit" value="Esborra">
        </form>
    </body>
</html>

