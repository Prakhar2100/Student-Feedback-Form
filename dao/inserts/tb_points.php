<?php

    //connection to the server
    include_once('../../connection/config.php');

    $sql = "INSERT INTO `feedback`.`tb_points` (`points_id`, `points_value`) VALUES
    ('1',    'Has the Teacher covered entire Syllabus as prescribed by University?'),
    ('2.1',  'Technical content'),
    ('2.2',  'Communication skills'),
    ('2.3',  'Availability beyond normal classes and co-operation to solve individual problems'),
    ('2.4',  'Pace on which contents were covered'),
    ('2.5',  'Overall effectiveness'),
    ('3',    'How do you rate the contents of the curricular'),
    ('4',    'How do you rate lab experiments, ifapplicable?'),
    ('5',    'Any Remarks')";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Insertion into points successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>