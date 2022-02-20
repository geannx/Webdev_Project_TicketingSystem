<?php 
    include 'student_sidebar.php';
?>
        <!-- Header for Greetings -->
        <div class="section">
            <div class="greetings">
                <h1 id="homeG">Write a New Ticket</h1>
            </div>
        </div>
    </div>

    <!-- FORM STARTS HERE -->
    <div class="ticket_form">
        <form action="writeTicket_input.php" method="POST">
            <label id="send_to">Send to:</label>
            <div class="select">
                <select name="FacultyID" id="faculty">
                <option selected disabled>----------</option>
                <?php
                //Loop to display all faculty head student is enrolled in
                    $sql = "SELECT class_head FROM class_list cl JOIN class_details cd ON cl.class_id = cd.class_id WHERE StudentID = ?" ;
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_SESSION['StudentID'] );
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while($row = mysqli_fetch_assoc($result)){
                ?> 
                    <option value="<?php echo $row['class_head']; ?>"><?php echo $row['class_head']; ?></option>
                    <?php } ?>
                </select>
            </div><br><br>
            <label for="Subject">Subject: </label>
            <input type="text" name ="Subject" placeholder="Subject"> 
            <div class="text_input">

                <!-- TEXT AREA -->
                <textarea id="message" name="MsgBody"></textarea>

                <!-- NOTE AREA -->
                <p id="note">Note: After clicking the submit button, you will be given a ticket number that you would need for future references.</p>
            </div>

            <!-- BUTTON SUBMIT TICKET -->
            <button type='submit' class="button" value="Submit">Submit Ticket</button>
        </form>
    </div> <!-- FORM ENDS HERE -->
</body>

</html>