<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=6;";
$cembali = mysqli_query($con, $sql);
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

      <div class="content5" styles= "grid-area: i0; height: 100; overflow: auto;">
        <div class="cembalit0">
        <p>Bemalung von Nachbauten historischer Cembali</p>
        <p>
        Deckelbemalung <br>
        Resonanzbodenbemalung <br> <br>
        Für Details auf Bilder klicken</p>
      </div>
      <div class="cembalit1">
        <p></p>
      </div>
      <div class="cembalii0">
          <a href="http://localhost/workspace1/detail-spinnet-17.php">
            <img class="cembaliimg" src="images/spinett 17 ganz1.jpg" alt="Bild von einem Spinnet"> <br>
            Spinnet 2017 <br> Resonanzbodenbemalung <br>
          </a>
      </div>
      <div class="cembalii1">
        <a href="http://localhost/workspace1/details-ital-cembalo.php">
          <img class="cembaliimg"  src="images/cembalo ital ganz.jpg" alt=""> <br>
        Italienisches Cembalo <br>
        Deckelbemalung (italienische Landschaft) <br> und Resonanzbodenbemalung
      </a>
      </div>
      <div class="cembalii2">
        <a href="http://localhost/workspace1/details-fläm-cembalo.php">
          <img class="cembaliimg"  src="images/cembalo fläm resboden ganz.jpg" alt=""> <br>
          Flämisches Cembalo <br> Resonanzbodenbemalung <br>
        </a>
      </div>
      <div class="cembali3">
        <a href="http://localhost/workspace1/details-südd-cembalo.php">
          <img class="cembaliimg"  src="images/cembalo südd resboden ganz.jpg" alt=""> <br>
          Süddeutsches Cembalo <br> Resonanzbodenbemalung <br>
        </a>
      </div>
      <div class="cembali4">
        <a href="http://localhost/workspace1/details-französische-cemablo.php">
          <img class="cembaliimg"  src="images/cembalo rot rosette.jpg" alt=""> <br>
          Französische Cembalo <br> Resonanzboden- und Deckelbemalung <br>
        </a>
      </div>
      <div class="cembali5">
        <a href="http://localhost/workspace1/details-spinett.php">
          <img class="cembaliimg"  src="images/spinett ganz.jpg" alt=""> <br>
          Spinnet <br> Resonanzboden- und Deckelbemalung <br>
        </a>
      </div>
      </div>
      <div class="copyright">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">
        <a class="haftungsausschluss" href="haftungsausschluss.php"
          >haftungsausschluss</a>
      </div>
    </div>
  </body>
</html>
