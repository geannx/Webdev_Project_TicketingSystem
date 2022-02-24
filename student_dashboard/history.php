<?php 
    include 'student_sidebar.php';
?>

<head>
    <!-- Include Style Sheet -->
    <style>
        <?php include "style_sDash.css";?>
    </style>
</head>

<body>
        <!-- GREETINGS HEADER -->
        <div class="section">
            <div class="greetings">
                <h1 id="homeG">Ticket History</h1>
            </div>
        </div>

        <!-- Ticket History Container Box -->
        <div class="container">
            <table class ="table-history">
                <tr>
                    <th class = "tb_columns">Ticket Number:</th>
                    <th class = "tb_columns">Recipient Faculty:</th>
                    <th class = "tb_columns">Subject:</th>
                    <th class = "tb_columns">Status:</th>
                    <th class = "tb_columns">Date Created:</th>
                </tr>
                
                <!-- Fetching Records from Database -->
                <?php
                    include_once 'dbh_ticket.php';
                    //Getting Tickets according to student ID
                    $sql = "SELECT * from ticket_details WHERE StudentID = ?";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $_SESSION['StudentID']);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    // Storing records/rows into array
                    while($row = mysqli_fetch_array($result)){
                    ?>

                        <tr>
                            <th class="h_th"><a href="sreply_interface.php?ticketnum=<?php echo $row['ticket_number'];?>"><?php echo $row['ticket_number'];?></a></th>
                            <th class="h_th"><?php echo $row['FacultyID'];?></th>
                            <th class="h_th"><?php echo $row['Subject'];?></th>
                            <th class="h_th"><?php echo $row['Status'];?></th>
                            <th class="h_th"><?php echo date("m/d/Y", strtotime($row["DateCreated"]));?></th>
                        </tr>

                    <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>

</html>