<?php

    //connection to the server
    include_once('../../connection/config.php');
    include_once('../../variables/variable.php');

    $sql = "INSERT INTO `feedback`.`tb_student` (`student_id`,`name`, `academic_year`, `semester`, `current_date`, `branch`, `section`, `percentage`, `cgpa`) VALUES
    ('$Rollno','$Name', '$year', '$sem', '$datee', '$Branch', '$Section', '$attendence', '$cgpa');";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into student successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>