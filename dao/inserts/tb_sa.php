<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_sa` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s14'),
    ('2.1', '$Rollno', '$si4'),
    ('2.2', '$Rollno', '$sii4'),
    ('2.3', '$Rollno', '$siii4'),
    ('2.4', '$Rollno', '$siv4'),
    ('2.5', '$Rollno', '$sv4'),
    ('3',   '$Rollno', '$s34'),
    ('4',   '$Rollno', '$s44'),
    ('5',   '$Rollno', '$s54');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into sa successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>