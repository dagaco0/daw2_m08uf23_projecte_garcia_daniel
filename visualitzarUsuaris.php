<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-dagaco',
    'username' => "cn=admin,$domini",
    'password' => 'Clotfje#2022',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];
$uid = $_POST['uid'];
$ou = $_POST['ou'];


$ldap = new Ldap($opcions);
$ldap->bind();
    $usuari=$ldap->getEntry('uid='.$uid.',ou='.$ou.',dc=fjeclot,dc=net');
    echo "<b><u>".$usuari["dn"]."</b></u><br>";
try{
    foreach ($usuari as $atribut => $dada) {
        if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
    }
} catch (Throwable $e) {
    echo '<p>No hi ha cap usuari amb aquestes credencials.</p>';
}

echo '<a href="menu.php"><button>Torna al menú</button></a>';

?>
