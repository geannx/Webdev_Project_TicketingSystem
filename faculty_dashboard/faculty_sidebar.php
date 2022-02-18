
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require '../dbh_inc.php';
         session_start();
         if(!isset($_SESSION['FacultyID'])){
             header('location: ../faculty_login.php?error=invalidaccess');
         }

        $sql = "SELECT * FROM faculty WHERE FacultyID = ?";
        $stmt = mysqli_stmt_init($conn);    
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $_SESSION['FacultyID']);
        mysqli_stmt_execute($stmt);
        $Data = mysqli_stmt_get_result($stmt);
        $Data = mysqli_fetch_assoc($Data);
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="style-fDashboard.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <!-- PUP LOGO -->
            <div class="logo">
                <img src="puplogo.png" alt="">
                <h2><?php echo $Data['FacultyName'];?></h2>
                <h5><?php echo $Data['FacultyID']; ?></h5>
                <p><?php echo $Data['FacultyDepartment']; ?></p>
            </div>
            <!-- Menu Items -->
            <ul>
                <li><a href="faculty_dashboard.php">
                    <span class="icon"><i class = "fas fa-home"> </i></span>
                    <span class="Item">Home</span></a></li>
                <li><a href="new_ticket.php">
                    <span class="icon"><i class = "far fa-bell"></i></span>
                    <span class="Item">Create New Ticket</span></a></li>
                <li><a href="view_tickets.php">
                    <span class="icon"><i class = "far fa-folder-open"> </i></span>
                    <span class="Item">View Tickets</span></a></li>
            </ul>
            
        <div class="footer-buttons">
            <ul>
                <li><a href="flogout.php">
                        <span class="icon"><i class = "fas fa-power-off"> </i></span>
                        <span class="Item">Logout</span></a></li>
            </ul>
        </div>
            <div class="footnote">
                
                <div>&copy Polytechnic University of the Philippines <br> College of Computer Infomation and Sciences 2022</div>
            </div>
        </div>