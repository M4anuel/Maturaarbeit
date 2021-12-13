<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('config/db_connect_admin.php');
        $content= mysqli_real_escape_string($con, $_POST['content']);
        $idnr= $_POST["idnr"];
    if(!empty($content)){
        
        $sql = "UPDATE content SET inhalt = ('$content') WHERE idnr = $idnr;";
        $execute = mysqli_query($con, $sql);
        
        if(!$execute){
            echo "Failed to submit the data";
            echo "$idnr";
            exit();
        }else{
            echo "<h1 class=> Data Successfully Submited </h1>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }

    }else{
        header('Location: index.php?emptyFields');
        exit();
    }
}else{
    header('Location: index.php?InvalidRequest');
        exit();
}
?>

