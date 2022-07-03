<?php

$testConnection = mysqli_connect('localhost', 'root', '123', 'ticketingsystem', 3307);
if(!$testConnection){
    die('Error:' . mysqli_connect_error());
}
echo 'Database connection working!';
mysqli_close($testConnection);
?>