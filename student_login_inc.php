<?php  

    function uIDExists($conn, $username){
        $sql = 'SELECT * FROM student WHERE StudentID = ?;';
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: student_login.php?error=stmtfailed');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
    }

    function loginStudent($conn, $username, $pwd){
        $uidExists = uidExists($conn, $username);
        if($uidExists === false){
            header('location: student_login.php?error=usernotexists');
            exit();
        }
        $pwdHashed = $uidExists['StudentPwd'];

        $pwd_check = password_verify($pwd, $pwdHashed);
        
        if($pwd === $pwdHashed){
            session_start();
            $_SESSION['StudentID'] = $uidExists['StudentID'];
            $_SESSION['StudentPassword'] = $uidExists['StudentPwd'];
            header('location: student_dashboard/student_dashboard.php');
            exit();
        }else{
            header('location: student_login.php?error=wronglogin');
            exit();
        }
    
    }
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        require 'dbh_inc.php';

        loginStudent($conn, $username, $pwd);
    
    }
    else{
        header('location: student_login.php?error=invalidentry');
    }