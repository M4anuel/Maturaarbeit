<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){}
else{
  require_once('config/db_connect_admin.php');
  $sql="  UPDATE lastwebsite SET link = ('http://localhost/workspace1/kontaktedit.php') WHERE id = 1;";
  mysqli_query($con, $sql);
  header('Location: http://localhost/workspace1/_login.php');
        exit();
}
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=14;";
$kontakt = mysqli_query($con, $sql);
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
    <link rel="stylesheet" href="CSS/editstyles.css" />
  </head>

  <body>
    <div class="site">
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

      <div class="cc content8" styles= "grid-area: i0; height: 100;">
          <div class="kontakti0">
            <img src="images/traversale.jpg" alt="">
          </div>
          <div class="kontaktt0">
          <form action="process.php" method="POST">
          <input type="hidden" name="idnr" value="14" class="editnr">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor">
                    <?php
                    echo implode(mysqli_fetch_assoc($kontakt));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
      </div>
      <div class="copyright">© 2012 Eva Jaeckle - Alle Rechte vorbehalten</div>
      <div class="haftungsausschluss">
        <a class="haftungsausschluss" href="haftungsausschluss.php"
          >haftungsausschluss</a>
      </div>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('Article_editor');
    </script>
    <script type="text/javascript">
        CKEDITOR.config.height='40vh';
        CKEDITOR.config.width='60vw';
    </script>
  </body>
</html>
