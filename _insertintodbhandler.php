<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('config/db_connect_admin.php');
        $content= mysqli_real_escape_string($con, $_POST['content']);
        $tablename= $_POST["tablename"];
        $columnname= $_POST["columnname"];
    if(!empty($content)){
    
        //$sql = "UPDATE $tablename SET inhalt = ('$content') WHERE tablename = $tablename;";
        $sql = "INSERT INTO $tablename($columnname)VALUES ('$content');";
        $execute = mysqli_query($con, $sql);
        
        if(!$execute){
            echo "Failed to submit the data:";
            echo " $tablename could not be inserted with: <br> $content";
            exit();
        }else{
            echo "<h1 class=> Data Successfully Submited </h1>";
            header('Location:http://localhost/workspace1/_insertintodb.php ');
            exit();
        }

    }else{
        header('Location: http://localhost/workspace1/_insertintodb.php?emptyFields');
        exit();
    }
}else{
    header('Location: http://localhost/workspace1/_insertintodb.php?InvalidRequest');
        exit();
}
?>

