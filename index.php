
<?php
include("database.php");
$sql="INSERT INTO user(username, password, email,date)
      VALUES ('deathstroke','batman','dts@gmail.com','')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="index.php"  method="post">
 
        <lebel> username:</lebel><br>
        <input type="text" name="username"><br>
        <label> password:</label><br>
        <input type="password" name="password"><br>
        <label>confirm  password:</label><br>
        <input type="password" name="cnpassword"><br>
        <input type="submit"  name="login" value="log in">
    </form>
</body>
</html>

<?php

foreach($_POST as $key =>$value){
    echo"".$key."=".$value."<br>";
}
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cnpassword = $_POST["cnpassword"];

  if(empty($username)){
   echo"username is missing";    
  }elseif(empty($password)){
         echo"password is missing";
  }elseif($password!=$cnpassword){
    echo"password not matching";
  }
  
  
  else{
    echo"welcome {$username}";
  }
  
  
}


?>