<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_nndl` (`points_id`, `student_id`, `rating`) VALUES
    ('1',   '$Rollno', '$s15'),
    ('2.1', '$Rollno', '$si5'),
    ('2.2', '$Rollno', '$sii5'),
    ('2.3', '$Rollno', '$siii5'),
    ('2.4', '$Rollno', '$siv5'),
    ('2.5', '$Rollno', '$sv5'),
    ('3',   '$Rollno', '$s35'),
    ('4',   '$Rollno', '$s45'),
    ('5',   '$Rollno', '$s55');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into nndl successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>