<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //connection to the server
        include_once('./connection/config.php');

        //including the variables from the frontend
        include_once('./variables/variable.php');

        //query to create the database
        include_once('./dao/createDatabase.php');


        // query to create student table
        include_once('./dao/tables/tb_student.php');

        //query to create points table
        include_once('./dao/tables/tb_points.php');

        //query to create dbms table
        include_once('./dao/tables/tb_dbms.php');

        //query to create cn table
        include_once('./dao/tables/tb_cn.php');

        //query to create tc table
        include_once('./dao/tables/tb_tc.php');

        //query to create sa table
        include_once('./dao/tables/tb_sa.php');

        //query to create nndl table
        include_once('./dao/tables/tb_nndl.php');

        //query to create toc table
        include_once('./dao/tables/tb_toc.php');


        //insert query in points table
        include_once('./dao/inserts/tb_points.php');

        //insert query in student table
        include_once('./dao/inserts/tb_student.php');

        //insert query in dbms table
        include_once('./dao/inserts/tb_dbms.php');

        //insert query in cn table
        include_once('./dao/inserts/tb_cn.php');

        //insert query in tc table
        include_once('./dao/inserts/tb_tc.php');

        //insert query in sa table
        include_once('./dao/inserts/tb_sa.php');

        //insert query in nndl table
        include_once('./dao/inserts/tb_nndl.php');

        //insert query in toc table
        include_once('./dao/inserts/tb_toc.php');
        
    }
?>