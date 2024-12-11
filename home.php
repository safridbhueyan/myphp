<?php
session_start();
?>

<?php
include("database.php");
$sql = "SELECT * FROM user WHERE username = 'safrid'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   $row = mysqli_fetch_assoc($result);
   echo $row["email"]."<br>";
}
mysqli_close($conn);

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