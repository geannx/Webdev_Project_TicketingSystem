<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUPLMS</title>
</head>
<body>
    <div class="bg">
        <!-- <img src="img/pupbg3.png"> -->
    </div>
    <div class="left-div">
        <div class="header">
            <img src="img/puplogo.png" alt="PUP Logo">
            <p class="p-header noselect">PUPLMS</p>
        </div>
        <div class="form-bg">
            <h1 class = "noselect">Hi, PUPian!</h1>
            <h6 class = "noselect">↓ &nbspPlease click or tap your destination </h6>
            <div class="form-buttons">
                <form  class="noselect" action="student_login.php">
                    <input id="student-button"  type="submit" value="Student"/>
                </form>
                <form class="noselect" action="faculty_login.php">
                    <input id="faculty-button"  type="submit" value="Faculty"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>