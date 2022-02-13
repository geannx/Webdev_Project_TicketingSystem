<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP Ticketing System Login</title>
    <style>
        body{
            font-family:  "Times New Roman", sans-serif;
            background-image: url('pupbg3.png');
            background-size: cover;
            overflow:hidden;
            margin:0%
        }
        
        h1{
            
            text-align: center;
            font-size: 40px;
            color: rgb(126, 14, 14);
            text-shadow: 2px 2px #ffffff;
        }

        h6{
            text-align: center;
            font-size: 13px;
            margin-bottom: 1%;
            color: rgb(126, 14, 14);
        }

        input{
            margin-top: 5px;
            width: 50%;
            font-size: 30px;
        }

        .form-buttons{
            margin-top: 0%;
            text-align: center;
        }
        
        #student-button{
            border:none;
            background-color: rgb(0, 0, 255);
            color: white;
            transition-duration: .35s;
        }

        #student-button:hover{
            background-color: rgba(0, 0, 109, 0.685);
            color:white;
        }
        
        #faculty-button{
            border:none;
            background-color: rgb(255, 78, 78);
            color: white;
            transition-duration: .35s;
        }

        #faculty-button:hover{
            background-color: rgba(141, 1, 1, 0.699);
        }
        
        .form-bg{
            overflow:auto;
            margin-top: -35%;
            margin-left: 35%;
            margin-right: 35%;
            padding-top: 50px;
            background-color: rgba(238, 238, 238, 0.692) ;
            padding-bottom: 100px;
            border-radius: 10px;
        }

        .disable-select {
            -webkit-user-select: none;  
            -moz-user-select: none;    
            -ms-user-select: none;      
            user-select: none;
            user-drag: none;
        }
        /* HEADER */
        .header{
            width: 100vh;
            height: 100vh;
            ondragstart: false;
        }

        .header img{
            width: 205%;
            height: 120%;
        }



    </style>
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