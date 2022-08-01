<<<<<<< HEAD
<?php
    require '../dbh_inc.php';

    $Subject = $_POST["MessageSubject"];
    $Body = $_POST["MessageBody"];
    $sql = "INSERT INTO tickets(MessageBody) VALUES('ADADAS');";

    mysqli_execute($conn, $sql);
    header('location: reply_interface.php?$Subject');
=======
<?php
    include '../dbh_inc.php';


    $sql = 'INSERT INTO tickets (MessageSubject, MessageBody) VALUES(?, ?);';
>>>>>>> 3ec8eaca34898ef35d3c39e1a0e705f430f35ae8
