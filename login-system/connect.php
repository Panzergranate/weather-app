<?php

$host = "localhost";
$user = "root";
$pass = "";
$db =   "login";
$conn=new mysqli($host,$user,$pass,$db, 3307); // Delete 3307 if not using this port
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>