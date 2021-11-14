<?php

    //connection to the server
    include_once('../connection/config.php');

    //create the database feedback 
    $sql = "CREATE DATABASE feedback";

    if($conn->query($sql) === TRUE) {
        echo nl2br("Database feedback created successfully\r\n");
    } else {
        echo nl2br("Error1 : ". $sql . "<br>" . $conn->error . "\r\n");
    }

?>