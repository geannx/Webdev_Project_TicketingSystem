<?php 
    require '../dbh_inc.php';
    session_start();

    if($_SESSION['status'] == "enroll"){
        $sql = "INSERT INTO class_details VALUES (?, ?);" ;
    }
    if($_SESSION['status'] == "remove"){
        $sql = "DELETE FROM class_details WHERE class_id = ? AND StudentID = ?;" ;
    }

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $_SESSION['class_id'], $_POST['StudentID'] );
 
            mysqli_stmt_execute($stmt);

    header ('location: enroll.php?class_id=' . $_SESSION['class_id'] . '&status=' . $_SESSION['status'] . '&process=success');

    
?>