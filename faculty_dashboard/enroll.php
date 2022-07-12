<?php 
    include_once 'faculty_sidebar.php';
    require '../dbh_inc.php';
    $_SESSION['class_id'] = $_GET['class_id'];
?>
<!-- Text box -->
<div class="section">
                <div class="nav">
                    <h1>Enroll Student</h1>
                </div>
            </div>
    </div>
    
    <div class="text_form">
    
    <form action="enroll_inc.php" method="POST"> 
        <br>
    <input type ="text" value="<?php echo $_GET['class_id']; ?>" disabled><br>
    <div class="select">
        <select name="StudentID" id="faculty" required>
        
        <option value="">----------</option>
        <!-- Change Sql statement if button selected is either enroll or remove -->
        <?php   
            if($_GET['status'] == "enroll"){
                $sql = "SELECT StudentID, StudentName FROM student 
                WHERE StudentID NOT IN(SELECT StudentID FROM class_details WHERE class_id = ?);" ;
            }
            if($_GET['status'] == "remove"){
                $sql = "SELECT StudentID, StudentName FROM student 
                WHERE StudentID IN(SELECT StudentID FROM class_details WHERE class_id = ?);" ;
            }
            $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_GET['class_id'] );
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_array($result)){
        ?> 
            <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StudentID'] . " (" . $row['StudentName'] . ")"; ?></option>
            <?php } ?>
        </select>    
        
    </div>
    <button class="red-button" type="submit" value="button-enroll"><?php if($_GET['status'] == "enroll") { $_SESSION['status'] = "enroll" ;?> Enroll Student <?php }else{ $_SESSION['status'] = "remove";?> Remove Student <?php } ?></button><br>
    </form>
    <?php if($_GET['process'] == "success"){?>
        <h1> Successful!<h1>
    <?php } ?>
</body>
 
</html>