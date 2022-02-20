<?php
    include 'faculty_sidebar.php';
    require '../dbh_inc.php';
    $sql = "SELECT * FROM ticket_details WHERE ticket_number = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_POST['ticketnum'] );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION['ticketnum'] = $_POST['ticketnum'];
?>
    <div class="section">
        <div class="nav">
            <h1>Reply to a Ticket</h1>
        </div>
    </div>
    </div>
    <div class="ticket-history-bg">
        <h2>Ticket Reply History</h2>
        <div class="ticket-history-inner">
            <div class="ticket-history-object">
            <?php
                $sql2 = "SELECT * FROM ticket_details td JOIN ticket_messages tm ON td.ticket_number = tm.ticket_number WHERE td.ticket_number = ?";
                $stmt2 = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt2, $sql2 );
                mysqli_stmt_bind_param($stmt2, "s", $_POST['ticketnum']);
                mysqli_stmt_execute($stmt2);
                $result2 = mysqli_stmt_get_result($stmt2);
                while($row2 = mysqli_fetch_assoc($result2)){
                    echo "<br><br>Sender: " . $row2['SenderID'] . "<br>Timestamp: " . $row2['TimeStamp'] . "<br><br>" . $row2['MsgBody'];
                }
            ?>
            </div>        
        </div>
    </div>
    <div class="text_form">
        <div class="ticket-details">
            <h1>Ticket Details:</h1><br>
            <label>Ticket Number: <?php echo $row['ticket_number'];?></label><br>
            <label>Student ID: <?php echo $row['StudentID']; ?></label><br>
            <label>Subject: <?php echo $row['Subject']; ?></label><br>
        </div>
    
        <form action="freply_interface_inc.php" method="POST">
        <div class="text_box">
            <textarea class="text" name="MsgBody" placeholder="Your reply here..."></textarea>
        </div>
        <div class="reply-button-bg">
            <input type="submit" class="reply-button" value="Reply to Ticket">
        </div>
        </form>
    </div>
</body>

</html>