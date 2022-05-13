<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

$uid = $_POST['uid'];
$ou = $_POST['ou'];
$uidNumber = $_POST['uidNumber'];
$gidNumber = $_POST['gidNumber'];
$home = $_POST['home'];
$shell = $_POST['shell'];
$cn = $_POST['cn'];
$sn = $_POST['sn'];
$givenName = $_POST['givenName'];
$postalAddress = $_POST['postalAddress'];
$mobile = $_POST['mobile'];
$telephoneNumber = $_POST['telephoneNumber'];
$title = $_POST['title'];
$description = $_POST['description'];
$objcl = array('inetOrgPerson', 'organizationalPerson', 'person', 'posixAccount', 'shadowAccount', 'top');


$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-dagaco',
    'username' => "cn=admin,$domini",
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];

$ldaprecord['objectClass'] = $objcl;
$ldaprecord['uid'] = $uid;
$ldaprecord['uidNumber'] = $uidNumber;
$ldaprecord['gidNumber'] = $gidNumber;
$ldaprecord['homeDirectory'] = $home;
$ldaprecord['loginShell'] = $shell;
$ldaprecord['cn'] = $cn;
$ldaprecord['sn'] = $sn;
$ldaprecord['givenName'] = $givenName;
$ldaprecord['postalAddress'] = $postalAddress;
$ldaprecord['mobile'] = $mobile;
$ldaprecord['telephoneNumber'] = $telephoneNumber;
$ldaprecord['title'] = $title;
$ldaprecord['description'] = $description;


$ldap = new Ldap($opcions);
$ldap->bind();

$dn ='uid='.$uid.',ou='.$ou.',dc=fjeclot,dc=net';


try {
    if ($ldap->add($dn, $ldaprecord)){
        echo "Usuari creat<br>";}
} catch (Exception $e) {
    echo "No 's'ha pogut crear l'usuari<br>";
}

echo '<a href="menu.php"><button>Torna al menú</button></a>';


?>