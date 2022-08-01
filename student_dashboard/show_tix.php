<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style_sDash.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
                <!--PUP LOGO-->
            <div class="profile">
                <img src="puplogo.png" alt="">
                    <!--Full Name ng Student-->
                <h3 id="student_name"><br>Dela Cruz, Juan M.</h3>
                    <!--Student Number-->
                <p id="student_id">2019-*****-MN-0</p>
            </div>
                <!--Sidebar Menu Items-->
            <ul>
                <li>
                    <!-- Student Dashboard Page -->
                    <a href="studentDash.php">
                    <span class="smenu_icon"><i class="fas fa-home"></i></span>
                    <span class="smenu_item">Home</span>
                    </a>
                </li>
                <li>
                    <!-- Write New Ticket Page -->
                    <a href="writeTicket.php">
                    <span class="smenu_icon"><i class="far fa-edit"></i></span>
                    <span class="smenu_item">Write New Ticket</span>
                    </a>
                </li>
                <li>
                    <!-- View History Page -->
                    <a href="history.php" class="active">
                    <span class="smenu_icon"><i class="far fa-folder-open"></i></span>
                    <span class="smenu_item">View History</span>
                    </a>
                </li>
            </ul>
            <!-- Footer that contains PUP -->
            <div class="footer">  
                <div>&copy Polytechnic University of the Philippines College of Computer Information and Sciences 2022
                </div>
            </div>
        </div>
        <!-- Header for Greetings -->
        <div class="section">
            <div class="greetings">
                <h1 id="homeG">View Ticket's Content</h1>
            </div>
        </div>

        <!-- Fetching Records from Database -->
        <?php
            include_once 'dbh_ticket.php';

            $sql_tm = mysqli_query($conn, "SELECT * from tickets_main");
            $sql_tf = mysqli_query($conn, "SELECT * from ticket_ref");
        ?>
            <div class="stix_container">
            <table border = 1px id = "tix_box" name = "ticket_box">

            <tr> 
                    <th class = "tix_columns" id = "tnum">Ticket Number:</th>
                    <th class = "tix_columns" id = "tsubj">Subject:</th>
                    <th class = "tix_columns" id = "tmess">Message:</th>
                    <th class = "tix_columns" id = "tsent">Date Sent:</th>
            </tr>

        <?php
            while($row_tm = mysqli_fetch_array($sql_tm)){
                while($row_tf = mysqli_fetch_array($sql_tf)){
                }
            }
        ?>
            </div>
            </table>
        <!-- ?> -->
    </div>