<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Shop
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

      <div class="shop1 cc" styles= "grid-area: i0; height: 100;">
          <div class="infobox">
              <?php
              require_once('config/db_connect.php');
              $sql = "SELECT beschreibung FROM shop WHERE id=1;";
              $shopbeschreibung = mysqli_query($con, $sql);
                 echo implode(mysqli_fetch_assoc($shopbeschreibung));
                ?>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=2;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=2;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=3;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=3;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=4;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=4;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=5;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=5;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=6;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=6;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=7;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=7;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=8;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=8;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=9;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=9;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=10;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=10;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
          </div>
          <div class="shopitem item">
             <?php 
               require_once('config/db_connect.php');
               $sql = "SELECT beschreibung FROM shop WHERE id=11;";
               $itembeschreibung = mysqli_query($con, $sql);
               $sql = "SELECT filename FROM shop WHERE id=11;";
               $itemfilename = mysqli_query($con, $sql);
              ?>
              <div class="shopimg"><img class="shopimg"src="images/<?php echo implode(mysqli_fetch_assoc($itemfilename)); ?>" alt=""></div>
              <div class="shoptext"><?php echo implode(mysqli_fetch_assoc($itembeschreibung)); ?></div>
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
