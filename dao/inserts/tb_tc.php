<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_tc` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s13'),
    ('2.1', '$Rollno', '$si3'),
    ('2.2', '$Rollno', '$sii3'),
    ('2.3', '$Rollno', '$siii3'),
    ('2.4', '$Rollno', '$siv3'),
    ('2.5', '$Rollno', '$sv3'),
    ('3',   '$Rollno', '$s33'),
    ('4',   '$Rollno', '$s43'),
    ('5',   '$Rollno', '$s53');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into tc successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>