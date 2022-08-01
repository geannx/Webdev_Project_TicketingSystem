<?php

function registerStudent($conn, $st_id, $st_name, $st_email, $st_pass){

    $sql = "INSERT INTO student (StudentId, StudentName, StudentEmail, StudentPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn); // prepare connection
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: student_register_inc.php?error=stmtfailed');
            exit();
        }
    mysqli_stmt_bind_param($stmt, "ssss", $st_id, $st_name, $st_email, $st_pass); // bind variables
    mysqli_stmt_execute($stmt); // execute connection
    header('location: student_reg_success.php');
}

function stIDExists($conn, $st_id, $st_name, $st_email, $st_pass){
    $sql = 'SELECT * FROM student WHERE StudentID = ?;';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: student_register_inc.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $st_id);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        echo("Student ID already exists.");
        exit();
    }
    else{
        registerStudent($conn, $st_id, $st_name, $st_email, $st_pass);
    }
}

if(isset($_POST['submit'])){
    $st_id = $_POST['StudentID'];
    $st_lname = $_POST['st_Lname'];
    $st_fname = $_POST['st_Fname'];
    $st_name = $st_fname." ".$st_lname;
    $st_email = $_POST['studentEmail'];
    $st_pass = $_POST['st_password'];
    $crypted_pwd = crypt($st_pass, 'admin');

    require 'dbh_inc.php';
    stIDExists($conn, $st_id, $st_name, $st_email, $crypted_pwd);
}