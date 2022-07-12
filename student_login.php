<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body{
            background-image: url('pupbg4.png');
            background-size: 100%;
            color:rgb(46, 46, 46);
            font-family: 'Source Sans Pro', sans-serif;
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
        <div class="input-form">
        <img src="puplogo.png" alt="pup logo" width="100">
        <h1>PUP Ticketing System<br>Student Login</h1>
        
        <form action="student_login_inc.php" method="POST">
            <input class="username" name="username" id="username" type="text" placeholder="Student ID"><br>
            <input class="password" name="password" id="password" type="password" placeholder="password"><br>
            <input class = "button" type="submit" name="submit" value="Login"><br>
            <input class = "button" type="submit" name="register" value ="Register"> 
        </form>
        </div>
    </body>
</html>