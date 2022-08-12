<?php
    //define config for mysql connection
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'cirrus');

    //connect to mysql
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }

    $dbdemo = new mysqli(DB_HOST, DB_USER, DB_PASS, 'cirrus_v2');
    if($dbdemo->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
?>