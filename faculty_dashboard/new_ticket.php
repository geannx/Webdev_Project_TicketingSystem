<?php
include_once 'faculty_sidebar.php';
?>

    <!-- Text box -->
    <div class="section">
                <div class="nav">
                    <h1>Create New Ticket</h1>
                </div>
            </div>
    </div>
    
    <div class="text_form">
    
        <form action="new_ticket_inc.php" method="POST">
            
    <div class="select">
        <select name="StudentID" id="faculty" required>
        <option value="">----------</option>
        <?php
            require '../dbh_inc.php';
            $sql = "SELECT StudentID FROM class_list cd JOIN class_details cl ON cl.class_id = cd.class_id WHERE class_head = ?" ;
            $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_SESSION['FacultyID'] );
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_array($result)){
        ?> 
            <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StudentID']; ?></option>
            <?php } ?>
        </select>          
    </div>
        <div class="text_box">
            <label for="Subject">Ticket Subject: </label>
            <input type="text" name="Subject" placeholder="Subject"><br><br>
            <textarea class="text" name="MsgBody" placeholder="Your reply here..."></textarea>
        </div>
            <input type="submit" class="button2" value="Create a New Ticket">
        </form>
    </div>
</body>

</html>