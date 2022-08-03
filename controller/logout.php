<?php
    //php logout
    session_start();

    if(session_destroy()) {
        header("location: /cirrus_project/login.php");
    }
?>