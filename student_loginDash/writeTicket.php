<?php
    include_once 'dbh_ticket.php';
?>

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
                    <a href="writeTicket.php" class="active">
                    <span class="smenu_icon"><i class="far fa-edit"></i></span>
                    <span class="smenu_item">Write New Ticket</span>
                    </a>
                </li>
                <li>
                    <!-- View History Page -->
                    <a href="history.php">
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
                <h1 id="homeG">Write a New Ticket</h1>
            </div>
        </div>
    </div>
    <!-- FORM STARTS HERE -->
    <div class="ticket_form">
        <form action="" method="POST">
            <label id="send_to">Send to:</label>
            <div class="select">
                <select name="faculty" id="faculty">
                    <option selected disabled>Recipient Faculty</option>
                    <option value="Dastas">Faculty Name Dastas</option>
                    <option value="Nayre">Faculty Name Nayre</option>
                </select>
            </div>
            <div class="text_input">
                <!-- TEXT AREA -->
                <textarea id="message" name="message"></textarea>
                <!-- NOTE AREA -->
                <p id="note">Note: After clicking the submit button, you will be given a ticket number that you would need for future references.</p>
            </div>
            <!-- BUTTON SUBMIT TICKET -->
            <button class="button" value="Submit" formaction="#">Submit Ticket</button>
        </form>
    </div> <!-- FORM ENDS HERE -->
</body>

</html>