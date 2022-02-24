<?php
    include_once 'student_sidebar.php';
    require '../dbh_inc.php';
    // Getting last ticket number in database to create new ticket number
    $sql_getLastTicket = "SELECT ticket_number FROM ticket_details ORDER BY ticket_number DESC;";
    $query = mysqli_query($conn, $sql_getLastTicket);
    $ticketNumber = mysqli_fetch_row($query);
    $ticketNumber = $ticketNumber[0] + 1; 

    // Inserting Ticket Values in ticket details table
    $sql = "INSERT INTO ticket_details (ticket_number, StudentID, FacultyID, `Subject`, `Status`, DateCreated) VALUES (?, ?, ?, ?, 'OPEN', curdate());";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isss", $ticketNumber, $_SESSION['StudentID'], $_POST['FacultyID'], $_POST['Subject']);
    mysqli_stmt_execute($stmt);
   
    //Inserting into ticket messages table
    $sql2 = "INSERT INTO ticket_messages ( ticket_number, `TimeStamp`, SenderID, MsgBody ) VALUES (?, CURRENT_TIMESTAMP, ?, ?);";
    $stmt2 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt2, $sql2 );
    mysqli_stmt_bind_param($stmt2, "iss", $ticketNumber, $_SESSION['StudentID'], $_POST['MsgBody']);
    mysqli_stmt_execute($stmt2);

    // Return to history.php for ticket viewing
    header("Location: history.php?ticket=created");
?>
    