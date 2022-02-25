<?php
    include_once 'faculty_sidebar.php';
    require '../dbh_inc.php';
?>

<div class="section">
                <div class="nav">
                    <h1>Archive Page</h1>
                </div>
            </div>
    </div>
        <div class="note">
            <h5>Note: All tickets displayed here are archived and can no longer be replied to.</h5>
        </div>

    <div class="view-tickets2">
        <table class="view-tickets">
            <!-- Display ticket data -->
            <tr>
                <th>Ticket Number</th>
                <th>Student Number</th>
                <th>Subject</th>
                <th>Status</th>
            </tr>
            <form action='freply_interface.php' method='POST' id="tickets-form"> 
            <?php 

                include '../dbh_inc.php';
                // statement to select all query
                $sql = "SELECT * FROM ticket_details WHERE FacultyID = ? AND Status='CLOSED';";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_SESSION['FacultyID']);
                mysqli_stmt_execute($stmt); 
                $result = mysqli_stmt_get_result($stmt);
                
                // loop to show all tickets
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <td class="td-ticket"><input class='ticket_id' type='submit' value='  <?php echo $row["ticket_number"]; ?>' name = 'ticketnum'></td>
                    <td class="td-ticket">  <?php  echo $row["StudentID"]; ?> </td>
                    <td class="td-ticket"> <?php echo $row["Subject"]; ?>  </td>
                    <td class="td-ticket"><?php  echo $row["Status"]; ?></option>
            <?php  }  ?>
            </form>
        </table>
    </div>
        
       
    </div>
</body>

</html>
