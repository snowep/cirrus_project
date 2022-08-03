<?php
session_start();
    if(isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
        header("location: /cirrus_project/user/user/index.php");
    }
    if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
        header("location: /cirrus_project/user/admin/index.php");
    }
    if (isset($_SESSION['level']) && $_SESSION['level'] == 'superuser') {
        header("location: /cirrus_project/user/superuser/index.php");
    }
?>