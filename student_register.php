<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

</head>
    <body>
        <div class="input-form">
        <img src="puplogo.png" alt="pup logo" width="100">
        <h1>PUP Ticketing System<br>Student Login</h1>
        
        <form action="student_register_inc.php" method="POST">
            <input class="StudentID" name="StudentID" id="StudentID" type="text" placeholder="Student ID" required><br>
            <input class="StudentName" name="st_Fname" id="st_Fname" type="text" placeholder="First Name" required><br>
            <input class="StudentName" name="st_Lname" id="st_Lname" type="text" placeholder="Last Name" required><br>
            <input class="StudentEmail" name="studentEmail" id="studentEmail" type="text" placeholder="Student Email" required><br>
            <input class="password" name="st_password" id="password" type="password" placeholder="Password" required><br>
            <input class ="button" type="submit" name="submit" value="Submit"><br> 
        </form>
        </div>
    </body>
</html>