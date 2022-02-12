<?php
    require '../dbh_inc.php';

    $Subject = $_POST["MessageSubject"];
    $Body = $_POST["MessageBody"];
    $sql = "INSERT INTO tickets VALUES(1, '12-12-12', '2018-0123-MN-0', '2018-543-MN-0', 'OPEN', 'SUBJECT', 'BODY');";

    // mysqli_query($conn, $sql);
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }