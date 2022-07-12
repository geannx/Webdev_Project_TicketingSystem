<?php
// This code is for database connection

$serverName = "localhost:3306";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ticketingsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}