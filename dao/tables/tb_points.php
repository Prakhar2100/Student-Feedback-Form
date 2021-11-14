<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE  `feedback`.`tb_points` ( 
        `points_id` VARCHAR(3) NOT NULL,
        `points_value` VARCHAR(100) NOT NULL,
        PRIMARY KEY (`points_id`)
    );" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table points created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>