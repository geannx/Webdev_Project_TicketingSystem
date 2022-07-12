<?php 

    require 'dbh_inc.php';
    $password = "12345";
    $pwd_hashed = crypt($password, "admin");
    $sql = "INSERT INTO faculty VALUES ('2022-1234-SS-0', 'Tester', 'test@test.com', 'CCIS', :pwd)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':pwd', $pwd_hashed, PDO::PARAM_STR);
    $stmt->execute();