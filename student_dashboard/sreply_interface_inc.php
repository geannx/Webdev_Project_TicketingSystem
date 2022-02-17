<?php
    require '../dbh_inc.php';

    $Subject = $_POST["MessageSubject"];
    $Body = $_POST["MessageBody"];

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }