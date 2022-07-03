<?php  
    require 'dbh.inc.php';

    function uIDExists($db, $username){
        $sql = 'SELECT * FROM faculty WHERE FacultyID = :facultyID;';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':facultyID', $username, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetchObject();
        return $row;

    }

    function loginFaculty($db, $username, $pwd){

        $uidExists = uidExists($db, $username);
        echo $uidExists;
        if(!$uidExists){
            header('location: faculty_login.php?error=usernotexists');
        }
        $pwd = $uidExists->password;
        echo $pwd;
        // $pwdHashed = password_verify($pwd, $pwd);
        
        // if($pwdHashed === true){
        //     session_start();
        //     $_SESSION['FacultyID'] = $uidExists['FacultyID'];
        //     $_SESSION['FacultyPwd'] = $uidExists['FacultyPwd'];
        //     header('location: faculty_dashboard/faculty_dashboard.php');
        //     exit();
        // }else{
        //     header('location: faculty_login.php?error=wronglogin');
        //     exit();
        // }
    }

    if(!isset($_POST['submit'])){
        header('location: faculty_login.php?error=invalidentry');
    }
    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('location: faculty_login.php?error=details needed');
    }
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    loginFaculty($db, $username, $pwd);
 
        
  