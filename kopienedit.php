<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){}
else{
  require_once('config/db_connect_admin.php');
  $sql="  UPDATE lastwebsite SET link = ('http://localhost/workspace1/kopienedit.php') WHERE id = 1;";
  mysqli_query($con, $sql);
  header('Location: http://localhost/workspace1/_login.php');
        exit();
}
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

      <div class="cc content6" styles= "grid-area: i0; height: 100;">
        <div class="kopientt0">
        <form action="process.php" method="POST">
          <input type="hidden" name="idnr" value="7" class="editnr">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor">
                    <?php
                    echo implode(mysqli_fetch_assoc($kopien0));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
      <img class="kopieni0" src="images/kopien spätgotischer.jpg" alt="">
          <div class="kopient1">
          <form action="process.php" method="POST">
          <input type="hidden" name="idnr" value="8" class="editnr">
                <textarea class="editbox" style="height: 400px;" name="content" id="Article_editor2">
                    <?php
                    echo implode(mysqli_fetch_assoc($kopien1));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="publish">
            </form>
          </div>
      <img class="kopieni1" src="images/blauen pferde.jpg" alt="">
      </div>
      <?php
      $sql = "SELECT menucode FROM menu WHERE versionid=5;";
      $bottommenu = mysqli_query($con, $sql);
      echo implode(mysqli_fetch_assoc($bottommenu));
      ?>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('Article_editor');
    </script>
    <script>
      CKEDITOR.replace('Article_editor2');
    </script>
    <script type="text/javascript">
        CKEDITOR.config.height='40vh';
        CKEDITOR.config.width='60vw';
    </script>
  </body>
</html>
