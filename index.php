<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP Ticketing System Login</title>

</head>
<body>
    <div class="header" >
        <img class="disable-select" src='header2.png' ondragstart="return false;">
    </div>
    
    <div class="form-bg">
        <h1 class = "disable-select">Hi, PUPian!</h1>
        <h6 class = "disable-select">↓ &nbspPlease click or tap your destination </h6>
        <div class="form-buttons">
        <form  action="student_login.php">
            <input id="student-button" type="submit" value="Student"/>
        </form>
        <form action="faculty_login.php">
            <input id="faculty-button" type="submit" value="Faculty"/>
        </form>
        </div>
    </div>
</body>
</html>