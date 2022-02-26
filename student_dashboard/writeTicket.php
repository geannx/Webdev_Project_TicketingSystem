<?php 
    include 'student_sidebar.php';
?>

<body>
<!-- Include Style Sheet -->
<style>
        <?php include "style_sDash.css";?>
</style>

<!-- Header for Greetings -->
<div class="section">
    <div class="greetings">
        <h1 id="homeG">Write a New Ticket</h1>
    </div>
</div>

    <!-- FORM STARTS HERE -->
    <div class="ticket_form">
        <form action="writeTicket_input.php" method="POST">
            <label id="send_to">Send to:</label>
            <div class="select">
                <select name="FacultyID" id="faculty" required>
                <option value="">----------</option>
                <?php
                //Loop to display all faculty head student is enrolled in
                    $sql = "SELECT FacultyName, class_head, class_id FROM faculty f JOIN class_list cl ON f.FacultyID = cl.class_head WHERE FacultyID IN 
                            (SELECT class_head FROM class_list cl JOIN class_details cd ON cl.class_id = cd.class_id WHERE StudentID = ?);" ;
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_SESSION['StudentID'] );
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while($row = mysqli_fetch_assoc($result)){
                ?> 
                    <option value="<?php echo $row['class_head']; ?>"><?php echo $row['FacultyName'];?>&emsp;[<?php echo $row['class_id'];?>]</option>
                    <?php } ?>
                </select>
            </div><br><br>

            <label id = "Lsubject">Subject: </label>
            <input type="text" id="t_subject" name ="Subject" placeholder="Enter subject" required> 
            <div class="text_input">

                <!-- TEXT AREA -->
                <textarea id="message" name="MsgBody" required></textarea>

                <!-- NOTE AREA -->
                <p id="note" >Note: After clicking the submit button, please refer to "View History" for the ticket number that you would need for future references.</p>
            </div>

            <!-- BUTTON SUBMIT TICKET -->
            <button type='submit' class="button" value="Submit">Submit Ticket</button>
        </form>
    </div> <!-- FORM ENDS HERE -->
</body>

</html>