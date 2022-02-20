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
                    <a href="studentDash.php">
                    <span class="smenu_icon"><i class="fas fa-home"></i></span>
                    <span class="smenu_item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="writeTicket.php">
                    <span class="smenu_icon"><i class="far fa-edit"></i></span>
                    <span class="smenu_item">Write New Ticket</span>
                    </a>
                </li>
                <li>
                    <a href="history.php" class="active">
                    <span class="smenu_icon"><i class="far fa-folder-open"></i></span>
                    <span class="smenu_item">View History</span>
                    </a>
                </li>
            </ul>
            <div class="footer">  
                <div>&copy Polytechnic University of the Philippines College of Computer Information and Sciences 2022
                </div>
            </div>
        </div>
        <!-- GREETINGS HEADER -->
        <div class="section">
            <div class="greetings">
                <h1 id="homeG">Ticket History</h1>
            </div>
        </div>

        <!-- Ticket History Container Box -->
        <div class="container">
            <table border = 10px name = ttable>
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

                    $sql_tm = mysqli_query($conn, "SELECT * from tickets_main");
                    $sql_tf = mysqli_query($conn, "SELECT * from ticket_ref");

                    // Storing records/rows into array
                    while($row_tm = mysqli_fetch_array($sql_tm)){
                        while($row_tf = mysqli_fetch_array($sql_tf)){
                    ?>

                        <tr>
                            <th class = "tb_rows"><a style= "color: #0645AD" href= "show_tix.php"><?php echo $row_tm['ticket_no'];?></a></th>
                            <th class = "tb_rows"><?php echo $row_tm['faculty_name'];?></th>
                            <th class = "tb_rows"><?php echo $row_tf['subject'];?></th>
                            <th class = "tb_rows"><?php echo $row_tm['status'];?></th>
                            <th class = "tb_rows"><?php echo date("m/d/Y", strtotime($row_tm["date_created"]));?></th>
                        </tr>
                    <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>

</html>