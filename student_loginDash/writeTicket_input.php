<?php

    include_once 'dbh_ticket.php';

        $recipient = $_POST['faculty_name'];
        $message = $_POST['ta_message'];
    
        $sql = "INSERT INTO tickets_main VALUES ('8', 'Gory', '2019-03460-MN-0', 'College of Science', '$recipient', 'On-going', CURDATE());";
        $sql2 = "INSERT INTO ticket_ref VALUES ('8','$message','1')
                    ";
        
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);

        header("Location: studentDash.php?succes");
?>