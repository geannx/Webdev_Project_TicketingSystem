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
                <select name="faculty_name" id="faculty">
                    <option selected disabled>----------</option>
                    <option value="Flora De Lisa">Flora De Lisa</option>
                    <option value="Enteng Kabisote">Enteng Kabisote</option>
                    <option value="Rowena Cruz">Rowena Cruz</option>
                    <option value="Gregorio Sarmiento">Gregorio Sarmiento</option>
                    <option value="David Figaro">David Figaro</option>
                </select>
            </div>
            <div class="text_input">

                <!-- TEXT AREA -->
                <textarea id="message" name="ta_message"></textarea>

                <!-- NOTE AREA -->
                <p id="note">Note: After clicking the submit button, you will be given a ticket number that you would need for future references.</p>
            </div>

            <!-- BUTTON SUBMIT TICKET -->
            <button type='submit' class="button" value="Submit">Submit Ticket</button>
        </form>
    </div> <!-- FORM ENDS HERE -->
</body>

</html>