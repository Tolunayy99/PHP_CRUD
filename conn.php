<?php

$host = 'localhost' ;
$dbname = 'vtb_2' ;
$username = 'root' ;
$pass = '' ;

$dsn = ("mysql:host=$host;dbname=$dbname");

try {
    $db = new PDO($dsn,$username,$pass);
} catch (PDOException $e){
    echo "Error" . $e->getMessage();
}

?>