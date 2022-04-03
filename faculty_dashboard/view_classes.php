<?php
    include_once 'faculty_sidebar.php';
    require_once '../dbh_inc.php';
?>

<div class="section">
            <div class="nav">
                <h1>View Your Classes</h1>
            </div>
        </div>
    </div>
        <div class="note">
            
        </div>

    <div class="view-tickets2">
        <table class="view-tickets">
            <!-- Display ticket data -->
            <tr class="tr-header font-style">
                <th>Class Code:</th>
                <th>Subject ID:</th>
                <th>Number of Students:</th>
            </tr>
            <form action='#' method='POST' id="tickets-form"> 
            <?php 

                // statement to select all classes belonging to prof ID
                $sql = "SELECT *, COUNT(StudentID) AS totalstudent FROM class_list cl JOIN class_details cd ON cl.class_id = cd.class_id WHERE class_head = ? GROUP BY cd.class_id;";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_SESSION['FacultyID']);
                mysqli_stmt_execute($stmt); 
                $result = mysqli_stmt_get_result($stmt);
                
                // loop to show all classes belonging to the prof ID
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr class="tr-data font-style">
                    <td class="td-ticket"><a class="td-ticketnum"href="class_details.php?class_id=<?php echo $row["class_id"]; ?>" name = 'class_id'><?php echo $row["class_id"]; ?></a></td>
                    <td class="td-ticket"><?php echo $row["subject_id"]; ?>  </td>
                    <td class="td-ticket"><?php echo $row["totalstudent"]; ?></td>
            <?php  }  ?>
            </form>
        </table>
    </div>
        
       
    </div>
</body>

</html>