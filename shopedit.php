<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){}
else{
  require_once('config/db_connect_admin.php');
  $sql="  UPDATE lastwebsite SET link = ('http://localhost/workspace1/shopedit.php') WHERE id = 1;";
  mysqli_query($con, $sql);
  header('Location: http://localhost/workspace1/_login.php');
        exit();
}
require_once('config/db_connect.php');
$sql = "SELECT beschreibung FROM shop WHERE id=2;";
$itembeschreibung = mysqli_query($con, $sql);
$sql = "SELECT filename FROM shop WHERE id=2;";
$itemfilename = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>
      Shop - edit
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

      <div class="cc shop1" styles= "grid-area: i0; height: 100;">

          <div class="infobox">

          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="1" class="editnr">
                <input type="hidden" name="filename" value="NULL" class="editnr">
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor">
                    <?php
                    require_once('config/db_connect.php');
                    $sql = "SELECT beschreibung FROM shop WHERE id=1;";
                    $shopbeschreibung = mysqli_query($con, $sql);
                    echo implode(mysqli_fetch_assoc($shopbeschreibung));
                    ?>
                </textarea>

                <input type="submit" class="publish-btn" name="submit_data" value="Shopbeschreibung speichern">
            </form>

          </div>

          <br>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=2;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=2;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="2" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor1">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=3;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=3;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="3" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor2">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>
          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=4;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=4;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="4" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor3">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>
          
          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=4;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=4;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="4" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor11">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=5;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=5;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="5" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor4">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=6;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=6;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="6" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor5">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=7;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=7;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="7" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor6">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=8;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=8;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="8" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor7">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=9;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=9;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="9" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor8">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=10;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=10;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="10" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor9">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

          <div class="shopitem item">
            <?php 
            require_once('config/db_connect.php');
            $sql = "SELECT beschreibung FROM shop WHERE id=11;";
            $itembeschreibung = mysqli_query($con, $sql);
            $sql = "SELECT filename FROM shop WHERE id=11;";
            $itemfilename = implode(mysqli_fetch_assoc(mysqli_query($con, $sql)));
            ?>
          <div class="shopimg"><img class="shopimg"src="images/<?php echo $itemfilename; ?>" alt=""></div>
          <form class="shopform" action="_shopprocess.php" method="POST">
                <input type="hidden" name="id" value="11" class="editnr">
                <input type="text" name="filename" value="<?php echo $itemfilename;?>" id="">
                : Dateiname
                <textarea class="editbox" style="height: 20vh;" name="content" id="Article_editor10">
                    <?php
                    echo implode(mysqli_fetch_assoc($itembeschreibung));
                    ?>
                </textarea>
                <input type="submit" class="publish-btn" name="submit_data" value="Eintrag speichern">
            </form>
          </div>

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
      CKEDITOR.replace('Article_editor1')
      CKEDITOR.replace('Article_editor2');
      CKEDITOR.replace('Article_editor3');
      CKEDITOR.replace('Article_editor4');
      CKEDITOR.replace('Article_editor5');
      CKEDITOR.replace('Article_editor6');
      CKEDITOR.replace('Article_editor7');
      CKEDITOR.replace('Article_editor8');
      CKEDITOR.replace('Article_editor9');
      CKEDITOR.replace('Article_editor10');
      CKEDITOR.replace('Article_editor11');
      
    </script>
    <script type="text/javascript">
        CKEDITOR.config.height='13vh';
        CKEDITOR.config.width='30vw';
    </script>
  </body>
</html>
