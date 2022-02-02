<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=7;";
$kopien0 = mysqli_query($con, $sql);
$sql = "SELECT inhalt FROM content WHERE idnr=8;";
$kopien1 = mysqli_query($con, $sql)
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Holzschnitte
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

      <div class="cc content6" styles= "grid-area: i0; height: 100;">
          <div class="kopient0"><?php   
                echo implode(mysqli_fetch_assoc($kopien0));
            ?>
            </div>
      <img class="kopieni0" src="images/kopien spätgotischer.jpg" alt="">
          <div class="kopient1">
            <?php   
                echo implode(mysqli_fetch_assoc($kopien1));
            ?>
          </div>
      <img class="kopieni1" src="images/blauen pferde.jpg" alt="">
      </div>
      <div class="copyright">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">
        <a class="haftungsausschluss" href="haftungsausschluss.php"
          >haftungsausschluss</a>
      </div>
    </div>
  </body>
</html>
