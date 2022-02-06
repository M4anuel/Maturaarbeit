<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('config/db_connect_admin.php');
        $content= mysqli_real_escape_string($con, $_POST['content']);
        $filename= mysqli_real_escape_string($con, $_POST['filename']);
        $idnr= $_POST["id"];
    //if(!empty($content)){
        
        $sql = "UPDATE shop SET beschreibung = ('$content') WHERE id = $idnr;";
        $execute = mysqli_query($con, $sql);
        $sql = "UPDATE shop SET filename = ('$filename') WHERE id = $idnr;";
        $execute = mysqli_query($con, $sql);
        
        if(!$execute){
            echo "Failed to submit the data";
            echo "<br> $filename, $content";
            exit();
        }else{
            echo "<h1 class=> Data Successfully Submited </h1>";
            header('Location: shop.php ');
            exit();
        }

    /*}else{
        header('Location: shopedit.php?emptyFields');
        exit();
    }
    */
}else{
    header('Location: shopedit.php?InvalidRequest');
        exit();
}
?>

