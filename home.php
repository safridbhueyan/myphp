<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    
    <form action="home.php" method="post">
    <input type="submit" name="logout" value="log out">
    </form>
   
</body>
</html>
<?php
  echo"welcome to the home page {$_SESSION["username"]}";

if(isset($_POST["logout"])){
    session_destroy();

    header("location: login.php");
}

?>