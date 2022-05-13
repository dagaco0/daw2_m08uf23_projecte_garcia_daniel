<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Afegir usauris</title>
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
        
        <h2>Afegir usauris</h2>
        <form action="../afegirUsuaris.php" method="POST">
            <label for="uid">UID</label>
            <input type="text" id="uid" name="uid">&emsp;&emsp;&emsp;&emsp;
            <label for="ou">OU</label>
            <input type="text" id="ou" name="ou"><br>
            <label for="uidNumber">uidNumber</label>
            <input type="text" id="uidNumber" name="uidNumber">&emsp;
            <label for="gidNumber">gidNumber</label>
            <input type="text" id="gidNumber" name="gidNumber"><br>
            <label for="home">Home</label>
            <input type="text" id="home" name="home">&emsp;&emsp;&emsp;
            <label for="shell">Shell</label>
            <input type="text" id="shell" name="shell"><br>
            <label for="cn">CN</label>
            <input type="text" id="cn" name="cn">&emsp;&emsp;&emsp;&emsp;
            <label for="sn">SN</label>
            <input type="text" id="sn" name="sn"><br>
            <label for="givenName">givenName</label>
            <input type="text" id="givenName" name="givenName">&emsp;
            <label for="postalAddress">postalAddress</label>
            <input type="text" id="postalAddress" name="postalAddress"><br>
            <label for="mobile">mobile</label>
            <input type="text" id="mobile" name="mobile">&emsp;&emsp;&emsp;
            <label for="uid">telephoneNumber</label>
            <input type="text" id="telephoneNumber" name="telephoneNumber"><br>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">&emsp;&emsp;&emsp;&emsp;
            <label for="description">Description</label>
            <input type="text" id="description" name="description"><br>
            <input type="submit" value="Crea">
        </form>
    </body>
</html>

