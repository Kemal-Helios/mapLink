<?php

$dsn    =   'mysql:host=localhost;dbname=maplinks';
$user   =   'root';
$pass   =   '';
$option   =   array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {

    $contant    =   new PDO($dsn, $user, $pass, $option);
    $contant->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
}

catch (PDOException $e) {

    echo 'Failed to connect to the database';

}

/* Contant For Insert In Index Page  */
    $conn = new mysqli('localhost', 'root', '', 'maplinks');
    $conn ->set_charset("utf8");