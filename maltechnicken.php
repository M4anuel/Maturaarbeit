<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=15;";
$maltechnicken = mysqli_query($con, $sql);
;
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Ausstellungen
    </title>
    <link rel="stylesheet" href="CSS/normalize.css" />
    <link rel="stylesheet" href="CSS/styles.css" />
  </head>

  <body>
    <div class="site">
      <div class="menu">
      <?php
      require_once('config/db_connect.php');
      $sql = "SELECT menucode FROM menu WHERE versionid=3;";
      $menu = mysqli_query($con, $sql);
      echo implode(mysqli_fetch_assoc($menu));
      ?>
      </div>

      <div class="cc content9" styles= "grid-area: i0; height: 100;">
          <div class="maltechnickeni0">
            <a href="http://localhost/workspace1/%C3%B6l.php"><img src="images/samantha 2.jpg" alt=""></a>
          </div>
          <div class="maltechnickent0">
            <?php   
                echo implode(mysqli_fetch_assoc($maltechnicken));
            ?>
          </div>
          <div class="maltechnickeni1">
            <img src="images/maltechnickenwerdegang.jpg" alt="">
          </div>
          <div class="maltechnickeni2">
            <a href="http://localhost/workspace1/pastell.php"><img src="images/quarana.jpg" alt=""></a>
          </div>
          <div class="maltechnickeni3">
            <a href="http://localhost/workspace1/kreide.php"><img src="images/chacora.jpg" alt=""></a>
          </div>
          
      </div>
      <?php
      $sql = "SELECT menucode FROM menu WHERE versionid=5;";
      $bottommenu = mysqli_query($con, $sql);
      echo implode(mysqli_fetch_assoc($bottommenu));
      ?>
    </div>
  </body>
</html>
