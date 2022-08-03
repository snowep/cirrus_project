<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<?php
    session_start();
    $target_dir = "../files/";
    $target_file = $target_dir . basename($_FILES["upload-file"]["name"]);
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["upload-file"]["tmp_name"], $target_file)) {
            include '../fragment/navbar.php';
            ?>
        <div class="container">
            <?php include '../fragment/content/upload-success.php' ?>
        </div>
            <?php
        } else {
            echo "Sorry, there was an error uploading your file.";
        } 
    }

    include 'config.php';
    date_default_timezone_set('Asia/Hong_Kong');
    $query = $db->query("INSERT INTO file_upload (name, user_id, upload_time) VALUES ('".$_FILES["upload-file"]["name"]."', '".$_SESSION['id']."', '".date('Y-m-d H:i:s')."')");

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>