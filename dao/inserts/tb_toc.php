<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_toc` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s16'),
    ('2.1', '$Rollno', '$si6'),
    ('2.2', '$Rollno', '$sii6'),
    ('2.3', '$Rollno', '$siii6'),
    ('2.4', '$Rollno', '$siv6'),
    ('2.5', '$Rollno', '$sv6'),
    ('3',   '$Rollno', '$s36'),
    ('4',   '$Rollno', '$s46'),
    ('5',   '$Rollno', '$s56');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into toc successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>