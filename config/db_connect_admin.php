<?php
$servername = "localhost";
$username = "Admin";
$password = "test";
$db_name = "eva_jaeckle";

$con = mysqli_connect($servername, $username, $password, $db_name);

if(!$con){
    echo "Failed to connect to server";
    exit();
}else{
    //echo "Connecting to server successfully";
}
?>