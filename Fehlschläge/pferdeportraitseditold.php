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
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/tyles.css" />
    <link rel="stylesheet" href="css/pferdeportraits.css" />
  </head>

  <body>
    <div class="pferdeportraits1">
      <div class="menu">
        <img class="logo" src="images/logo 2.png" alt="" />

        <div class="name">
          <a href="index.php">Eva Jaeckle</a>
        </div>
        <div class="pferdeportraits">
          <a href="pferdeportraits.php">Pferdeportraits</a>
        </div>
        <div class="pferdebilder">
          <a href="pferdebilder.php">Pferdebilder</a>
        </div>
        <div class="landschaft">
          <a href="landschaft.php">Landschaft</a>
        </div>
        <div class="holzschnitte">
          <a href="holzschnitte.php">Holzschnitte</a>
        </div>
        <div class="cembali">
          <a href="cembali.php">Cembali</a>
        </div>
        <div class="kopien">
          <a href="kopien.php">Kopien</a>
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


        <img class="bild" src="images/laciaro li fix korr 1.jpg" alt="">
        <div class="pferdeportraitstext">
            <form action="process.php" method="POST">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor">
                    <?php
                    echo implode(mysqli_fetch_assoc($pferdeportraits));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
        </div>
        <div class="portraitauftraege">
        <form action="process.php" method="POST">
                <textarea name="content2" id="Article_editor2">
                    <?php
                    echo implode(mysqli_fetch_assoc($portraitauftraege));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
        </div>
      <div class="footer0">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">Haftungsausschluss</div>
    </div>
  </body>
  <script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('Article_editor');
    CKEDITOR.replace('Article_editor2');
</script>
</html>
