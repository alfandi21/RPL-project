<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php
      include '../PHP/config.php';
      session_start();
      if(isset($_SESSION['posisi']) == false){
        header("Location: login.php");
      }
    ?>
  </head>
  <body>
    <h1>Hello World</h1>
    <a href="../PHP/logout.php">Logout</a>
  </body>
</html>
