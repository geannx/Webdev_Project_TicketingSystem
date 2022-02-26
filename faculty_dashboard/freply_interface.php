<?php
    include 'faculty_sidebar.php';
    require '../dbh_inc.php';

    // getting ticket details by matching ticket number in database
    $sql = "SELECT * FROM ticket_details WHERE ticket_number = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_GET['ticketnum'] );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['ticketnum'] = $_GET['ticketnum'];
?>
    <div class="section">
        <div class="nav">
            <h1>Ticket Details</h1>
        </div>
    </div>
    </div>
    <div class="ticket-history-bg">
        <h2>Ticket Reply History</h2>
        <div class="ticket-history-inner">
            <div class="ticket-history-object">
            <?php
                // querying ticket replies history
                $sql2 = "SELECT * FROM ticket_details td JOIN ticket_messages tm ON td.ticket_number = tm.ticket_number WHERE td.ticket_number = ?";
                $stmt2 = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt2, $sql2 );
                mysqli_stmt_bind_param($stmt2, "s", $_GET['ticketnum']);
                mysqli_stmt_execute($stmt2);
                $result2 = mysqli_stmt_get_result($stmt2);
                //loop to display website history
                while($row2 = mysqli_fetch_assoc($result2)){
                    echo "<br><br>Sender: " . $row2['SenderID'] . "<br>Timestamp: " . $row2['TimeStamp'] . "<br><br>" . $row2['MsgBody'];
                }
            ?>
            </div>        

        </div>
        <!-- Checking if Status is Closed, and removes close ticket -->
        <?php if($row['Status'] =='OPEN' ){?>
        <form action="close_ticket.php">
            <button type="submit" class="closeticket-button" value="close_ticket">Close Ticket</button>
        </form>
        <?php } ?>
        <!-- Displaying ticket closed after pressing close ticket button -->
       
    </div>
    <!-- ticket details -->
    <div class="text_form">
        <div class="ticket-details">
            <h1>Ticket Details:</h1><br>
            <label>Ticket Number: <?php echo $row['ticket_number'];?></label><br>
            <label>Student ID: <?php echo $row['StudentID']; ?></label><br>
            <label>Subject: <?php echo $row['Subject']; ?></label><br>
        </div>
    <!-- Removing Textbox if ticket is already closed -->
    <?php if($row['Status'] == 'OPEN' ){?>
        <form action="freply_interface_inc.php" method="POST">
        <div class="text_box">
            <textarea class="text" name="MsgBody" placeholder="Your reply here..."></textarea>
        </div>
        <div class="reply-button-bg">
            <button type="submit" formaction="freply_interface_inc.php" class="reply-button" value="reply">Reply to Ticket</button>
        </div>
        </form>
    <?php } ?>  
    </div>
</body>

</html>