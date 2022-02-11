<?php
include_once 'faculty_sidebar.php';
?>

    <!-- Text box -->
    <div class="section">
                <div class="nav">
                    <h1>Reply to a Ticket</h1>
                </div>
            </div>
    </div>
    <div class="text_form">
        <form action="reply_interface_inc.php" method="POST">
            <h1>Ticket Details:</h1><br>
            <label>Ticket Number: <?php 
            require_once '../dbh_inc.php';
             $sql = "SELECT * FROM ticket_status WHERE ticket_number = ?;";
             $stmt = mysqli_stmt_init($conn);
             mysqli_stmt_prepare($stmt, $sql);
             mysqli_stmt_bind_param($stmt, "s", $_POST['ticketnum'] );
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             $row = mysqli_fetch_assoc($result);
               echo $row['ticket_number'];?></label><br>
            <label>Student ID: <?php
            echo $row['StudentID'];
            ?></label><br>
            <label>Subject: <?php
            echo $row['Subject'];
            ?></label>

        <div class="text_box">
            <textarea class="text" name="MessageBody" placeholder="Your reply here..."></textarea>
        </div>
            <button type="submit" class="button" >Reply to a Ticket</button>
        </form>
    </div>
</body>

</html>