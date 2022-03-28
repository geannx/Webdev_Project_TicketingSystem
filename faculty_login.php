<!DOCTYPE html>
<html lang="en">
<head>

    <link href="login_style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <style>
        body{
            background-image: url('pupbg2.png');
            background-size: 100%;
            color:rgb(46, 46, 46);
            font-family: 'Source Sans Pro', monospace, sans-serif;
            height: 100%;
            overflow: hidden;
        }

        h1{
            margin-top: 10px;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
        }
        
        h2{
            font-size: 45px;
            text-align: center;
            font-weight: normal;
        }

        .input-form{
            margin: 5% 500px 0% 500px;
            padding-top: 60px;
            padding-bottom: 140px;
            background-color: rgba(248, 249, 252, 0.534) ;
            text-align: center;
            border-radius: 10px;
        }

        input{
            border-color: rgb(230, 230, 230);
            border-radius: 5px;
            margin-top: 10px;
            align-items: center;
            font-size: 30px;
        }

        .button{
            border: none;
            border-radius: 50px;
            width: 40%;
            transition-duration: .35s;
        }

        .button:hover{
            background-color: rgba(238, 238, 238, 0.692);
        }

    </style>
</head>
    <body>
        <div class="header">
            <img src="img/puplogo.png" alt="PUP Logo">
            <h1 class="h1-header noselect">PUPLMS</h1>
        </div>
        
        <div class="input-form">
            <h1 class="h1-body">Faculty Login</h1>
            <h6>Welcome PUPian! Enter your details to continue.</h6>
            <form action="faculty_login_inc.php" method="POST" id="login-form">
                <input class="username" name="username"  type="text" placeholder="Faculty ID" required><br>
                <input class="password" name="password" type="password" placeholder="Password" required><br>
            </form>
            <a href="#" class="forgot-password">Forgot your password?</a><br>
            <button form="login-form" class="button" type="submit" name="submit" value="Login">Login</button>
        </div>
    </body>
</html>