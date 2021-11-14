<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_cn` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s12'),
    ('2.1', '$Rollno', '$si2'),
    ('2.2', '$Rollno', '$sii2'),
    ('2.3', '$Rollno', '$siii2'),
    ('2.4', '$Rollno', '$siv2'),
    ('2.5', '$Rollno', '$sv2'),
    ('3',   '$Rollno', '$s32'),
    ('4',   '$Rollno', '$s42'),
    ('5',   '$Rollno', '$s52');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into cn successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>