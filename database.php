<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "logininfo";
$conn ="";
try{
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name,
       
    );
    echo"your connected <br>";
}catch(mysqli_sql_exception){
    echo"Connection lost";

}


?>