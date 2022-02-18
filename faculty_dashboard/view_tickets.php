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
    <table>
        <tr>
            <th>Ticket Number</th>
            <th>Student Number</th>
            <th>Subject</th>
            <th>Status</th>
        </tr>
        <?php 

            include '../dbh_inc.php';
            // statement to select all query
            $sql = "SELECT * FROM ticket_details;";
            $result = mysqli_query($conn, $sql);
            // loop to show all tickets
            while($row = mysqli_fetch_assoc($result)){
                echo "<form action='freply_interface.php' method='POST'> <tr><td><input class='ticket_id' type='submit' value='"  . $row["ticket_number"] .  "' name = 'ticketnum'></td><td>" . 
                 $row["StudentID"] . "</td><td>" . $row["Subject"]  . "</td><td>" . $row["Status"] . "</td></tr></form>";
            } 
        ?>
    </table>
</body>

</html>