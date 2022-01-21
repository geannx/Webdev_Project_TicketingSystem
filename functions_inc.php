<?php

// function emptyInputLogin($username, $password){
//     if(isset($username) = ){

//     }
// }



function uIDExists($conn, $username){
    $sql = 'SELECT * FROM users WHERE usersName = ?;';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: faculty_login.php?error=stmtfailed');
        exit();
    }
}


function loginUser($conn, $username, $pwd){

    $uidExists = uidExists($conn, $username);

    if($uidExists === false){
        header('location: faculty_login.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header('location: faculty_login.php?error=wronglogin');
        exit();
    }
    else if ($checkPwd === false){
        session_start();
        $_SESSION['username'] = $uidExists['usersName'];
        $_SESSION['pwd'] = $uidExists['usersPwd'];
        header('location: faculty_dashboard.php');
        exit();
    }

    
}