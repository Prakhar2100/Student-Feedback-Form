<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "CREATE TABLE  `feedback`.`tb_student` ( 
        `name` VARCHAR(30) NOT NULL , 
        `academic_year` VARCHAR(5) NOT NULL , 
        `semester` INT(2) NOT NULL , 
        `current_date` DATE NOT NULL , 
        `branch` VARCHAR(5) NOT NULL , 
        `section` VARCHAR(2) NOT NULL , 
        `percentage` FLOAT(4,2) NOT NULL , 
        `cgpa` FLOAT(4,2) NOT NULL ,
        `student_id` VARCHAR(10) NOT NULL , 
        PRIMARY KEY (`student_id`)
    );" ;

    if($conn->query($sql) === TRUE) {
        echo nl2br("Table student created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>