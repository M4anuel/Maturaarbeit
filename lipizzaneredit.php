<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){}
else{
  require_once('config/db_connect_admin.php');
  $sql="  UPDATE lastwebsite SET link = ('http://localhost/workspace1/lipizzaneredit.php') WHERE id = 1;";
  mysqli_query($con, $sql);
  header('Location: http://localhost/workspace1/_login.php');
        exit();
}
require_once('config/db_connect.php');
$sql = "SELECT inhalt FROM content WHERE idnr=18;";
$lipizzaner = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Lipizzaner
    </title>
    <link rel="stylesheet" href="CSS/normalize.css" />
    <link rel="stylesheet" href="CSS/styles.css" />
    <link rel="stylesheet" href="CSS/editstyles.css" />
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

      <div class="cc content12" styles= "grid-area: i0; height: 100;">
      <a href="http://localhost/workspace1/lipizzaner-beispiele.php"><img class="lipizzaneri0" src="images/servola öl.jpg" alt=""></a>
          <div class="lipizzanert0">
          <form action="process.php" method="POST">
          <input type="hidden" name="idnr" value="18" class="editnr">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor">
                    <?php
                    echo implode(mysqli_fetch_assoc($lipizzaner));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
          <img class="lipizzaneri1" src="images/lipizzaner.JPG" alt="">
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
        CKEDITOR.config.height='50vh';
        CKEDITOR.config.width='40vw';
    </script>
  </body>
</html>
