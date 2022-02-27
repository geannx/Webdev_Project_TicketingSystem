<?php
    include_once 'faculty_sidebar.php';
    require_once '../dbh_inc.php';
?>
<div class="section">
            <div class="nav">
                <h1>View Class Details</h1>
            </div>
        </div>
    </div>
        <div class="note">
            <!-- Buttons for enrollment -->
            <h1>Class ID: <?php echo $_GET['class_id'];?></h1>
            <a href="enroll.php?class_id=<?php echo $_GET['class_id']; ?>&status=enroll&process=pending" class="button-enroll red-button" type="submit">Enroll a Student</a>
            <a href="enroll.php?class_id=<?php echo $_GET['class_id']; ?>&status=remove&process=pending" class="button-remove red-button" type="submit">Remove a Student</a>
        </div>

    <div class="view-tickets2">
        <table class="view-tickets">
            <!-- Display ticket data -->
            <tr class="tr-header font-style">
                <th>Student ID:</th>
                <th>Student Name:</th>
                <th>Student Email:</th>
            </tr>
            <form action='#' method='POST' id="tickets-form"> 
            <?php 

                // statement to select all classes belonging to prof ID
                $sql = "SELECT cd.StudentID, StudentName, StudentEmail FROM class_details cd JOIN student s ON cd.StudentID = s.StudentID WHERE class_id = ?;";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "s", $_GET['class_id']);
                mysqli_stmt_execute($stmt); 
                $result = mysqli_stmt_get_result($stmt);
                
                // loop to show all classes belonging to the prof ID
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr class="tr-data font-style">
                    <td class="td-ticket"><?php echo $row["StudentID"]; ?></td>
                    <td class="td-ticket"><?php echo $row["StudentName"]; ?></td>
                    <td class="td-ticket"><?php echo $row["StudentEmail"]; ?></td>
            <?php  }  ?>
            </form>
        </table>
    </div>
        
       
    </div>
</body>

</html>