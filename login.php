<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>confirm password</label><br>
        <input type="password" name="cnpassword"><br>
        <input type="submit" name="login" value="log in"><br>
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    if(isset($_POST["login"])){
        if(empty(($_POST["username"]))){
            echo"username is empty";
        }elseif(empty(($_POST["password"]))){
            echo"password is empty";
        }elseif($_POST["password"]!=$_POST["cnpassword"]){
            echo"password doesnt match";
        }else{
            // echo"welcome {$_POST["username"]}";
           $_SESSION["username"]= $_POST["username"];
           $_SESSION["password"]= $_POST["password"];
           $_SESSION["cnpassword"]= $_POST["cnpassword"];
            
            header("location: home.php");
        }
    }
?>