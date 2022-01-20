<?php

require 'dbh_inc.php';
// function emptyInputLogin($username, $password){
//     if(isset($username) = ){

//     }
// }

function loginUser($conn, $username, $pwd){

    $uidExists = uidExists($conn, $username, $password);

    if($uidExists === false){
        header('location: faculty_login.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        session_start();
        $_SESSION['username'] = $uidExists['usersName'];
        $_SESSION['pwd'] = $uidExists['usersPwd'];
        header('location: faculty_dashboard.php');
        exit();
    }
    
}