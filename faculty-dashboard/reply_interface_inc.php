<?php
    include '../dbh_inc.php';


    $sql = 'INSERT INTO tickets (MessageSubject, MessageBody) VALUES(?, ?);';