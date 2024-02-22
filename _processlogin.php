<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:limegreen">
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('config/db_connect_admin.php');
        $password= htmlspecialchars(mysqli_real_escape_string($con, $_POST['password']));
        $username= htmlspecialchars($_POST["username"]);
    if(!empty($password)){
        if(strcmp( $password, "")==0 && strcmp( $username,"")==0){
            require_once('config/db_connect_admin.php');
            $sql="SELECT link FROM lastwebsite WHERE id = 1;";
            $lastwebsite = mysqli_query($con, $sql);
            $lastwebsite = implode(mysqli_fetch_assoc($lastwebsite));
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    }else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
}

?>
<form action="<?php echo strval($lastwebsite);?>" method="POST">  
        <div class="container">    
            <button style="width:99vw; height:97vh; font-size:6rem; background-color: limegreen; border:none;" 
            type="submit">Login Erfolgreich <br>Drücken um weiterzufahren</button> 
        </div>   
    </form>   
</body>
</html>
