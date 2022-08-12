<?php
include 'config.php';

function saveInputData($data)
{
    $sql = "INSERT INTO sekolah (nama) VALUES ('$data')";
}

$dbdemo->query($sql);
