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
$atribut = $_POST['radio'];
$nouValor = $_POST['nouValor'];

$ldap = new Ldap($opcions);
$ldap->bind();

$atributCanviat[''.$atribut.''] = $nouValor;


try {
    if ($ldap->update('uid='.$uid.',ou='.$ou.',dc=fjeclot,dc=net',$atributCanviat)){
        echo "Usuari modificat<br>";}
} catch (Exception $e) {
    echo "Hi ha hagut algun error<br>";
}

echo '<a href="menu.php"><button>Torna al menú</button></a>';


?>