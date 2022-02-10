<?php
    require '../dbh_inc.php';

    $Subject = $_POST["MessageSubject"];
    $Body = $_POST["MessageBody"];
    $sql = "INSERT INTO tickets(MessageBody) VALUES('ADADAS');";

    mysqli_execute($conn, $sql);
    header('location: reply_interface.php?$Subject');