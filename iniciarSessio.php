<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
    
    $user = $_POST["user"];
    $password = $_POST["password"];
    
    $opcions = [
        'host' => 'zend-dagaco',
        'username' => $user,
        'password' => $password,
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    
    $ldap = new Ldap($opcions);
    
    try {
        $ldap->bind();
        header('location:menu.php');
    } catch (Throwable $e) {
        echo '<p>Credencials incorrectes. Torna a intentar-ho.</p>
            <a href="index.php"><button>Inici</button></a>';
    }

?>