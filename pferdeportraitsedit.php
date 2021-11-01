<?php 
require_once('config/db_connect_admin.php');
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
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Edit Pferdeportraits
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

      <div class="content1">
          <img src="images/laciaro li.jpg" alt="" class="i1">
          <div class="t0">
          <form action="process.php" method="POST">
           <input type="hidden" name="idnr" value="1" class="editnr">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor">
                    <?php
                    echo implode(mysqli_fetch_assoc($pferdeportraits));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
          <div class="t2">
          <form action="process.php" method="POST">
           <input type="hidden" name="idnr" value="2" class="editnr">
                <textarea name="content" id="Article_editor2">
                    <?php
                    echo implode(mysqli_fetch_assoc($portraitauftraege));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
          <img class="i2" src="images/skizzieren 2.jpg" alt="">
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
      CKEDITOR.replace('Article_editor2');
    </script>
    <script type="text/javascript">
        CKEDITOR.config.height='50vh';
        CKEDITOR.config.width='30vw';
    </script>
  </body>
</html>