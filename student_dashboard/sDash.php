<!DOCTYPE html>
<html lang="en">
<head>
    <?php
<<<<<<< HEAD:student_dashboard/sDash.php
    require '../dbh_inc.php';

    session_start();
    if ($_SESSION['StudentID'] === NULL || $_SESSION['StudentPassword'] === NULL){
        header('location: ../index.html?error=invalidaccess');
        exit();
    }
    $sql = "SELECT * FROM student WHERE StudentID = ?";
    mysqli_stmt_prepare($stmt, $sql);
    
=======
        require '../dbh_inc.php';

        session_start();
      
        $sql = "SELECT * FROM student WHERE StudentID = ?";
        $stmt = mysqli_stmt_init($conn);    
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $_SESSION['StudentID']);
        mysqli_stmt_execute($stmt);
        $Data = mysqli_stmt_get_result($stmt);
        $Data = mysqli_fetch_assoc($Data);
>>>>>>> main:student_dashboard/student_dashboard.php
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style_sDash.css">
</head>

<header id="background">
<body>
    <div class="wrapper">

        <div class="sidebar">

                <!--PUP LOGO-->
            <div class="profile">

                <img src="puplogo.png" alt="">
                    <!--Full Name ng Student-->
<<<<<<< HEAD:student_dashboard/sDash.php
                <h3 id="student_name"><br><?php echo $_SESSION['StudentName']; ?></h3>
=======
                <h3 id="student_name"><br><?php echo $Data['StudentName']; ?></h3>
>>>>>>> main:student_dashboard/student_dashboard.php
                    <!--Student Number-->
                <p id="student_id"><?php echo $Data['StudentID'];?></p>
            </div>
                <!--Sidebar Menu Items-->
            <ul>
                <li>
                    <a href="sDash.php" class="active">
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
                    <a href="history.php">
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

        <div class="section">
            <div class="greetings">
                <h1 id="homeG">WELCOME PUPIAN!</h1>
                <p>Kindly choose from the sidebar what service you're looking for.</p>
            </div>
        </div>
    </div>
</body>
</header>
</html>