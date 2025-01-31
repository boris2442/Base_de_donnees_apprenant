<?php

$dns="mysql:host=localhost;dbname=amcorporation;chasert=utf8";
$user="root";
$pass="";

try{
    $cnx = new PDO($dns,$user,$pass);
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);

}catch(PDOException $e){

    $message="connexion echoue:" .$e->getMessage();
}
?>