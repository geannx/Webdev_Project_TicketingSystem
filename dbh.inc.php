<?php
// This code is for database connection

$serverName = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ticketingsystem";
try{
    $db = new PDO("mysql:host=$serverName;port=3307;dbname=$dBName", $dBUsername, $dBPassword); 
}catch(PDOException $e){
    echo $e->getMessage();
}