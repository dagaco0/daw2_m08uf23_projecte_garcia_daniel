<?php
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial;
        }
    </style>
    </head>
    <body>
        <form action="./index.php" method="POST">
                <input type="submit" value="Tanca la sessió">
        </form><br>
        
        <a href="./vistes/vistaVisualitzar.php"><h2>Visualitzar usuaris</h2></a>
        <a href="./vistes/vistaAfegirUsuaris.php"><h2>Afegir usauris</h2></a>
        <a href="./vistes/vistaEsborrarUsuaris.php"><h2>Esborrar usuari</h2></a>
        <a href="./vistes/vistaModificarUsuari.php"><h2>Modificar usuari</h2></a>
    </body>
</html>
