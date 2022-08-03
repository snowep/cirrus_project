<?php
  if (!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['username'])) {
    header("location: login.php");
  }
?>

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
        $page = "index";
        include '../../components/navbar.php';
    ?>
    <div class="text-center">
      <h1>Welcome <?php echo $_SESSION['fullName']; ?></h1>
    </div>
    <div class="container">
        <div class="mb-3 mt-3">
            <form action="../../controller/upload-file.php" method="post" enctype="multipart/form-data">
                <input type="file" class="form-control mb-3" id="upload-file" name="upload-file">
                <input type="submit" class="btn btn-primary mb-3" value="Upload File">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>