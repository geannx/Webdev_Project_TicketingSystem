<?php
    include 'student_sidebar.php';
    require '../dbh_inc.php';
    $sql = "SELECT * FROM ticket_details WHERE ticket_number = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_GET['ticketnum'] );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
?>
    <div class="section">
        <div class="greetings">
            <h1>Reply to a Ticket</h1>
        </div>
    </div>
    </div>
    <div class="ticket-history-bg">
        <h2>Ticket Reply History</h2>
        <div class="ticket-history-inner">
            <div class="ticket-history-object">
            <?php
                $sql = "SELECT * FROM ticket_messages WHERE ticket_number = ?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_GET['ticketnum'] );
                mysqli_stmt_execute($stmt);
                $result1 = mysqli_stmt_get_result($stmt);
                if(!$result1){
                    echo "Empty Conversation.";
                }else{
                    while($result2 = mysqli_fetch_assoc($result1)){
                        echo "<br><br>Sender: " . $result2['SenderID'] . '<br>Timestamp: ' . $result2['TimeStamp'] . '<br><br>' . '<br><br>' . $result2['MsgBody'];
                    }
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
            <textarea class="text" name="MessageBody" placeholder="Your reply here..."></textarea>
        </div>
        <div class="reply-button-bg">
            <input type="submit" class="reply-button" value="Reply to Ticket">
        </div>
        </form>
    </div>
</body>

</html>