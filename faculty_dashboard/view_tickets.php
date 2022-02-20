<?php
include_once 'faculty_sidebar.php';
?>
            <div class="section">
                <div class="nav">
                    <h1>Reply to a Ticket</h1>
                </div>
            </div>
    </div>
        <div class="note">
            <h5>Note: All tickets received is displayed here, you can reply anytime. You can also close the status of the ticket if it has already reached its final conclusion.</h5>
        </div>

    <div class="view-tickets2">
    <table class="view-tickets">
        <tr>
            <th>Ticket Number</th>
            <th>Student Number</th>
            <th>Subject</th>
            <th>Status</th>
        </tr>
        <?php 

            include '../dbh_inc.php';
            // statement to select all query
            $sql = "SELECT * FROM ticket_details WHERE FacultyID = ?;";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['FacultyID']);
            mysqli_stmt_execute($stmt);
            
            $result = mysqli_stmt_get_result($stmt);

            // loop to show all tickets
            while($row = mysqli_fetch_assoc($result)){
                echo "<form action='freply_interface.php' method='POST'> <tr><td><input class='ticket_id' type='submit' value='"  . $row["ticket_number"] .  "' name = 'ticketnum'></td><td>" . 
                 $row["StudentID"] . "</td><td>" . $row["Subject"]  . "</td><td>" . $row["Status"] . "</td></tr></form>";
            } 
        ?>
    </table>
        </div>
    </div>
</body>

</html>