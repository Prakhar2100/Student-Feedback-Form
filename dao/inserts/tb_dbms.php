<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_dbms` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s11'),
    ('2.1', '$Rollno', '$si1'),
    ('2.2', '$Rollno', '$sii1'),
    ('2.3', '$Rollno', '$siii1'),
    ('2.4', '$Rollno', '$siv1'),
    ('2.5', '$Rollno', '$sv1'),
    ('3',   '$Rollno', '$s31'),
    ('4',   '$Rollno', '$s41'),
    ('5',   '$Rollno', '$s51');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into dbms successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>