<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=4;";
$landschaft = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Landschaft
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

      <div class="cc content3" styles= "grid-area: i0; height: 100;">
          <img src="images/der ochsen.jpg" alt="" class="landschafti0">
          <div class="landschaftt0">
            <?php   
                echo implode(mysqli_fetch_assoc($landschaft));
            ?>
          </div>
          <a href="gemälde.php"><img class="landschafti1" src="images/v märchligen, frühling.jpg" alt=""></a>
          <a href="allmedingen.php"><img class="landschafti2" src="images/abend an der aare121x90.jpg" alt=""></a>
          <a href="zeichnungen.php"><img class="landschafti3" src="images/ochsen hinter bürglen122x91.jpg" alt=""></a>
      </div>
      <div class="copyright">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">
        <a class="haftungsausschluss" href="haftungsausschluss.php"
          >haftungsausschluss</a>
      </div>
    </div>
  </body>
</html>
