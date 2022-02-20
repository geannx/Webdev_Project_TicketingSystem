<?php
    require '../dbh_inc.php';
    session_start();
    $Body = $_POST["MsgBody"];

    $sql = "INSERT INTO ticket_messages (ticket_number, TimeStamp, SenderID, MsgBody) VALUES(?, CURRENT_TIMESTAMP, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $_SESSION['ticketnum'], $_SESSION['FacultyID'], $Body);
    mysqli_stmt_execute($stmt);
    // mysqli_query($conn, $sql);
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }