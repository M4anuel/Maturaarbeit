<?php 
require_once('config/db_connect.php');
$sql = "SELECT beschreibung FROM shop WHERE id=1;";
$shopbeschreibung = mysqli_query($con, $sql);
$sql = "SELECT beschreibung FROM shop WHERE id=2;";
$item1beschreibung = mysqli_query($con, $sql);
$sql = "SELECT filename FROM shop WHERE id=2;";
$item1filename = mysqli_query($con, $sql);
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
      <div class="menu"><?php
      require_once('config/db_connect.php');
      $sql = "SELECT menucode FROM menu WHERE versionid=3;";
      $menu = mysqli_query($con, $sql);
      echo implode(mysqli_fetch_assoc($menu));
      ?>
      </div>

      <div class="cc shop" styles= "grid-area: i0; height: 100;">
          <div class="infobox">
              <?php
                 echo implode(mysqli_fetch_assoc($shopbeschreibung));
                ?>
          </div>
          <div class="shopitem item1">
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($item1filename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($item1beschreibung)); ?></div>
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
