<?php
$name = "localhost";
$uname = "root";
$password = "";
$port = 3308;


$db_name = "multiuser_test";

$conn = mysqli_connect($name,$uname,$password,$db_name,$port);

if ($conn){
    echo "Connection Success";
}

else{
    echo "Connection Failed";
    exit();
}


?>