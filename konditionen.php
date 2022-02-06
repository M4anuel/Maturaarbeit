<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=16;";
$konditionenl = mysqli_query($con, $sql);
$sql = "SELECT inhalt FROM content WHERE idnr=17;";
$konditionenr = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Konditionen
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

      <div class="cc content10" styles= "grid-area: i0; height: 100;">
          
          <div class="konditionent0">
            <?php   
                echo implode(mysqli_fetch_assoc($konditionenl));
            ?>
          </div>
          <img class="konditioneni0" src="images/nanook.jpg" alt="" >
          <img class="konditioneni1" src="images/staffelei.jpg" alt="">

          <div class="konditionent1">
            <?php   
                echo implode(mysqli_fetch_assoc($konditionenr));
            ?>
          </div>
          <!---
          <div class="konditioneni2">
            <img src="images/konditionen.jpg" alt="">
          </div>
          --->
        
      </div>
      <?php
      $sql = "SELECT menucode FROM menu WHERE versionid=5;";
      $bottommenu = mysqli_query($con, $sql);
      echo implode(mysqli_fetch_assoc($bottommenu));
      ?>
    </div>
  </body>
</html>
