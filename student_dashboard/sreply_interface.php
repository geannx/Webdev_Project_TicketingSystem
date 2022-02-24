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

<head>
    <!-- Include Style Sheet -->
    <style>
        <?php include "style_sDash.css";?>
    </style>

    <!-- Greetings/Header -->
    <div class="section">
        <div class="greetings">
            <h1 id = "homeG">Reply to a Ticket</h1>
        </div>
    </div>
</head>

<body>
    <!-- Ticket History and Headers -->
    <div class="ticket-history-bg">
        <h2 id="ticket_rh">Ticket Reply History</h2>
        <div class="ticket-history-inner">
            <div class="ticket-history-object">
            <?php
            // Query to get all messages belonging to the ticket number
                $sql = "SELECT * FROM ticket_messages WHERE ticket_number = ?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_GET['ticketnum'] );
                mysqli_stmt_execute($stmt);
                $result1 = mysqli_stmt_get_result($stmt);
                $_SESSION['ticketnum'] = $_GET['ticketnum'];
                
                if(!$result1){
                    echo "Empty Conversation.";
                }else{
                    while($result2 = mysqli_fetch_assoc($result1)){
                        echo "<br>Sender: " . $result2['SenderID'] . '<br>Date:' . date("F d, Y", strtotime($result2['TimeStamp'])) . '<br>Time:' . date("H:i", strtotime($result2['TimeStamp'])) . '<br>' . '<br>' . $result2['MsgBody'] .'<br><br>';
                    }
                }
            ?>
            </div>        
        </div>
    </div>

    <!-- To get the faculty name addresed in the ticket -->
    <?php
        if(strtolower($row['Status']) == 'open'){
        $db_FacultyID = $row['FacultyID'];
        $fname_sql = "SELECT FacultyName from faculty WHERE FacultyID = '$db_FacultyID';";
        $fname_result = mysqli_query($conn,$fname_sql);
        
        while($fname_row = mysqli_fetch_assoc($fname_result)){
            $fname_php = $fname_row['FacultyName'];
        }
    ?>
        
    <!-- Write Reply Section -->
    <div class = "ticket_reply_container">
        <div class="text_form">
            <div>
                <h2 id="td_lb">Ticket Details:</h2><br>
                <label class="ticket_details">Ticket Number: <?php echo $row['ticket_number'];?></label><br>
                <label class="ticket_details">Faculty Name: <?php echo $fname_php ?></label><br>
                <label class="ticket_details">Subject: <?php echo $row['Subject']; ?></label><br>
            </div>
                
            <!-- Text Area -->
            <form action="sreply_interface_inc.php" method="POST">
                <div class="text_box">
                    <textarea class="tb_text" name="MsgBody" placeholder="Your reply here..."></textarea>
                </div>

                <!-- Reply Button -->
                <div>
                    <input type="submit" class="reply_button" value="Reply to Ticket">
                </div>
            </form>
        </div>
    </div>
    <?php } ?>
</body>

</html>