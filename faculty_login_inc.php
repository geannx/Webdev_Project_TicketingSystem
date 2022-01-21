<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        require 'dbh_inc.php';
        require 'functions_inc.php'

        loginUser($conn, $username, $pwd);
    }
    else{
        header('location: faculty_login.php?error=invalidentry');
    }

    