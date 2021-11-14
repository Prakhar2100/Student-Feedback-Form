<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE `feedback`.`tb_nndl` ( 
        `points_id` VARCHAR(10) NOT NULL , 
        `student_id` VARCHAR(10) NOT NULL ,
        `rating` INT(2) NOT NULL , 
        PRIMARY KEY (`student_id`, `points_id`),
        FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
        FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
    ) ;";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table nndl created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>