<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  color: #9e451f;
  background-color: white;  
}  
button {   
       background-color: lightgrey; 
       border: 1px solid black;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: #fff0da;
        border: 1px solid black; 
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }   
</style>   
</head>    
<body>    
    <center> <h1> Einloggen um zu editieren </h1> </center> 
    <form action="_processlogin.php" method="POST">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>  
            <button type="button" class="cancelbtn" onclick="window.history.go(-1)"> Abbrechen</button>   
             <a href="#"> Passwort vergessen? </a>   
        </div>   
    </form>   
</body>     
</html>  