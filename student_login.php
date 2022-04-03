<!DOCTYPE html>
<html lang="en">
<head>

    <link href="login_style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
</head>
    <body>
        
        <div class="side-color"></div>
        <div class="flexy-parent">
            <div class="header">
                        <p><img src="img/puplogo.png" alt="PUP Logo"></p>
                        <p class="p-header noselect">PUPLMS</p>
            </div>
            <div class="input-form">
                    <h1 class="h1-body noselect">Student Login</h1>
                    <h6>Welcome PUPian! Enter your details to continue.</h6>
                    <form action="student_login_inc.php" method="POST" id="login-form">
                        <input class="username" name="username"  type="text" placeholder="Student ID"><br>
                        <input class="password" name="password" type="password" placeholder="Password"><br>
                    </form>
                    <a href="#" class="forgot-password">Forgot your password?</a><br>
                    <button form="login-form" class="button" type="submit" name="submit" value="Login">Login</button>
            </div>
        </div>
   
    </body>
</html>