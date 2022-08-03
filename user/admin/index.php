<?php
  include '../../controller/config.php';
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
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Upload by</th>
            <th scope="col">Upload on</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            //make query to select from database
            $query = "SELECT file_upload.id, file_upload.name, file_upload.upload_time, user.fullName FROM file_upload INNER JOIN user ON file_upload.user_id = user.id ORDER BY `file_upload`.`upload_time` DESC;";
            $result = $db->query($query);
            $directory = '../../files';
            $files = array_diff(scandir($directory), array('.', '..'));
            $i = 1;
            $j = 2;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">'.$i.'</th>';
                echo '<td>'.$files[$j].'</td>';
                echo '<td>'.$row['fullName'].'</td>';
                echo '<td>'.$row['upload_time'].'</td>';
                echo '<td> <a href="'.$directory.'/'.$files[$j].'" target="_blank">View</a> </td>';
                echo '</tr>';
                $i++;
                $j++;
            }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>