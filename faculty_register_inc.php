<?php

function facultyRegister($conn, $f_id, $f_name, $f_email, $f_department,  $f_pass){
    $sql = "INSERT INTO faculty (FacultyID, FacultyName, FacultyEmail, FacultyDepartment, FacultyPwd) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: faculty_register_inc.php?error=stmtfailed');
            exit();
    }
    mysqli_stmt_bind_param($stmt, "sssss", $f_id, $f_name, $f_email, $f_department, $f_pass);
    mysqli_stmt_execute($stmt);
    header('location: faculty_register_success.php');
}

function fIDExists($conn, $f_id, $f_name, $f_email, $f_department, $f_pass){
    $sql = 'SELECT * FROM faculty WHERE FacultyID = ?;';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: faculty_register_inc.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $f_id);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        echo("Faculty ID already exists.");
        exit();
    }
    else{
        facultyRegister($conn, $f_id, $f_name, $f_email, $f_department, $f_pass);   
    }
}


if(isset($_POST['register'])){
    $f_id = $_POST['FacultyID'];
    $f_fname = $_POST['f_fname'];
    $f_lname = $_POST['f_lname'];
    $f_name = $f_fname." ".$f_lname;
    $f_department = $_POST['f_department'];
    $f_email = $_POST['facultyEmail'];
    $f_pass = $_POST['f_password'];
    $password_encryption = crypt($f_pass, 'admin');

    

    require 'dbh_inc.php';
    fIDExists($conn, $f_id, $f_name, $f_email, $f_department, $password_encryption);
}