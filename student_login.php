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
        
        <form action="student_login_inc.php" method="POST">
            <input class="username" name="username" id="username" type="text" placeholder="Student ID" required><br>
            <input class="password" name="password" id="password" type="password" placeholder="password"><br>
            <input class = "button" type="submit" name="submit" value="Login">
        </form>
        </div>
    </body>
</html>