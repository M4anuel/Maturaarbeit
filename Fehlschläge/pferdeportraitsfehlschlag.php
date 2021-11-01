<?php 
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=1;";
$pferdeportraits = mysqli_query($con, $sql);
$sql = "SELECT inhalt FROM content WHERE idnr=2;";
$portraitauftraege = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico?crc=4084839963" />
    <title> Pferdeportraits </title>
    <link rel="stylesheet" href="CSS/normalize.css" />
    <link rel="stylesheet" href="CSS/styles.css" />
    <link rel="stylesheet" href="CSS/pferdeportraits.css" />
  </head>
  <body>
    <div class="pferdeportraits1">
      <div class="menu">
        <a class="logo" href="index.php">
          <img class="logo" src="images/logo 2.png" alt="" />
        </a>
        <div class="name">
          <a href="index.php">Eva Jäckle</a>
        </div>

        <div class="dropdown1">
          <button class="dropbtn">Pferdebilder ▾</button>
          <div class="dropcontent">
            <a href="pferdeportraits.php">Pferdeportraits</a> <br />
            <a href="pferdebilder.php">Pferdebilder</a>
          </div>
        </div>

        <div class="landschaft">
          <a href="landschaft.php">Landschaft</a>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Andere Werke ▾</button>
          <div class="dropcontent">
            <a class="hoverdrp" href="holzschnitte.php">Holzschnitte</a> <br />
            <a class="hoverdrp" href="cembali.php">Cembali</a> <br />
            <a class="hoverdrp" href="kopien.php">Kopien</a>
          </div>
        </div>

        <div class="ausstellungen">
          <a href="ausstellungen.php">Ausstellungen</a>
        </div>

        <div class="biographie">
          <a href="biographie.php">Biographie</a>
        </div>
        <div class="kontakt">
          <a href="kontakt.php">Kontakt</a>
        </div>
      </div>
    <img class="pferdeportraitsi1" src="images/laciaro li.jpg" alt="" />

    <div class="pferdeportraitst0">
        <?php   
            echo implode(mysqli_fetch_assoc($pferdeportraits));
        ?>
    </div>

    <div class="pferdeportraitst1">
        <p>Portraitaufträge für 2021 können ab sofort angemeldet werden.</p>
    </div>

    <img class="pferdeportraitsi2" src="images/skizzieren 2.jpg" alt="" />

    <div class="pferdeportraitst2">
        <?php   
            echo implode(mysqli_fetch_assoc($portraitauftraege));
        ?>
    </div>

      <div class="footer0">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">Haftungsausschluss</div>
    </div>
  </body>
</html>
