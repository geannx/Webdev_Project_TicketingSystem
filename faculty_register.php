<!DOCTYPE html>
<html lang="en">
<head>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Register</title>
    
</head>
    <body>
        <div class="input-form">
        <img src="puplogo.png" alt="pup logo" width="100">
        <h1>PUP Ticketing System<br>Faculty Register</h1>
        <form action="faculty_register_inc.php" method="POST">
            <input class="username" name="FacultyID"  id="FacultyID" type="text" placeholder="Faculty ID" required><br>
            <input class="fname" name="f_fname" id="f_fname" type="text" placeholder="First Name" required><br>
            <input class="lname" name="f_lname" id="f_lname" type="text" placeholder="Last Name" required><br>
            <input class="f_department" name="f_department" id="f_department" type="text" placeholder="Faculty Department" required><br>
            <input class="email" name="facultyEmail" id="facultyEmail" type="text" placeholder="Faculty Email" required><br>
            <input class="password" name="f_password" type="password" placeholder="Password" required><br>
            <input class="button" type="submit" name="register" value="Register">
        </form>
        </div>
    </body>
</html>