<?php
?>  
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Menú</title>
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
    
	<h2>Visualitzar usuaris</h2>
	<form action="visualitzarUsuaris.php" method="POST">
        <label for="uid">UID</label>
        <input type="text" id="uid" name="uid"><br>
        <label for="ou">OU</label>
        <input type="text" id="ou" name="ou"><br>
        <input type="submit" value="Visualitza">
    </form>
    
	<h2>Afegir usauris</h2>
	<form action="afegirUsuaris.php" method="POST">
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
    
    <h2>Esborrar usuari</h2>
	<form action="esborrarUsuaris.php" method="POST">
		<label for="uid">UID</label>
        <input type="text" id="uid" name="uid"><br>
        <label for="ou">OU</label>
        <input type="text" id="ou" name="ou"><br>
        <input type="submit" value="Esborra">
    </form>
    
    <h2>Modificar usuari</h2>
	<form action="modificarUsuari.php" method="POST">
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

