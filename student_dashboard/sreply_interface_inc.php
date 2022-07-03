<?php
    include 'student_sidebar.php';
    require '../dbh.inc.php';

    
    $Body = $_POST["MsgBody"];
    session_start();
    $ticketnum = $_SESSION['ticketnum'];

    //Inserting reply data to database
    $sql = "INSERT INTO ticket_messages (ticket_number, `TimeStamp`, SenderID, MsgBody) VALUES(?, CURRENT_TIMESTAMP, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "iss", $ticketnum, $_SESSION['StudentID'], $Body);
    mysqli_stmt_execute($stmt);
    // mysqli_query($conn, $sql);
    header('location: sreply_interface.php?ticketnum=' . $_SESSION['ticketnum']);

   