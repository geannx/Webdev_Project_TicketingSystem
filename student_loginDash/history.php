<?php 
    include 'student_sidebar.php';
?>
        <!-- GREETINGS HEADER -->
        <div class="section">
            <div class="greetings">
                <h1 id="homeG">Ticket History</h1>
            </div>
        </div>

        <!-- Ticket History Container Box -->
        <div class="container">
            <table border = 10>
                <tr>
                    <th class = "tb_columns">Ticket Number:</th>
                    <th class = "tb_columns">Recipient:</th>
                    <th class = "tb_columns">Subject:</th>
                    <th class = "tb_columns">Status:</th>
                    <th class = "tb_columns">Date Created:</th>
                </tr>
                
                <!-- Fetching Records from Database -->
                <?php
                    include_once 'dbh_ticket.php';

                    $sqlFetch = mysqli_query($conn, "SELECT * from tickets_main");

                    // Storing records/rows into array
                    while($row = mysqli_fetch_array($sqlFetch)){
                    ?>

                        <tr>
                            <th><?php echo $row['ticket_no'];?></th>
                            <th><?php echo $row['faculty_name'];?></th>
                            <th><?php echo "&nbsp";?></th>
                            <th><?php echo $row['status'];?></th>
                            <th><?php echo $row['date_created'];?></th>
                        </tr>

                    <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>

</html>