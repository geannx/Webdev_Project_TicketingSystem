<?php

    require '../dbh_inc.php';
    $Body = $_POST["MsgBody"];
    session_start();
    $sql = "INSERT INTO ticket_messages (ticket_number, TimeStamp, SenderID, MsgBody) VALUES(?, CURRENT_TIMESTAMP, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $_SESSION['ticketnum'], $_SESSION['FacultyID'], $Body);
    mysqli_stmt_execute($stmt);
    // mysqli_query($conn, $sql);
    header ('location: freply_interface.php?ticketnum=' . $_SESSION['ticketnum']);
