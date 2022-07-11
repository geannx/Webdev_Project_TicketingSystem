<?php
    include_once 'faculty_sidebar.php';
    require_once '../dbh_inc.php';

    // inserting closed ticket status in db
    $sql = "UPDATE ticket_details SET Status='CLOSED' WHERE ticket_number = ?; ";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['ticketnum']) ;
    mysqli_stmt_execute($stmt);
?>
