<?php

    include_once 'dbh_ticket.php';

        $recipient = $_POST['faculty_name'];
        $message = $_POST['ta_message'];
        $subject = $_POST['ta_subject'];
    
        $sql = "INSERT INTO tickets_main VALUES ('1', 'Sunshine', '2019-03460-MN-0', 'CCIS', '$recipient', 'On-going', CURDATE());";
        $sql2 = "INSERT INTO ticket_ref VALUES ('1','$subject','$message','1');";
        
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);

        header("Location: studentDash.php?succes");
?>