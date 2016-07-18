<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 7/18/2016
 * Time: 8:39 AM
 */

class Logout {
    function getOut(){
        session_start();
        session_destroy();
        header('Location: ../logins/FormLogin.php');
        exit;
    }
}

$logout = new Logout();
$logout->getOut();