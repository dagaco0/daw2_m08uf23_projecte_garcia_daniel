<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-dagaco',
    'username' => "cn=admin,$domini",
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];
$uid = $_POST['uid'];
$ou = $_POST['ou'];


$ldap = new Ldap($opcions);
$ldap->bind();

try {
    if ($ldap->delete('uid='.$uid.',ou='.$ou.',dc=fjeclot,dc=net')){
        echo "Usuari esborrat<br>";}
} catch (Exception $e) {
    echo "Aquest usuari no existeix<br>";
}


echo '<a href="menu.php"><button>Torna al menú</button></a>';


?>