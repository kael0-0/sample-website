<?php

$host="localhost";
$user="root";
$pass="";
$db="login databases";
$conn = new mysqli($host, $user,$pass, $db);
  if($conn -> connect_error){
    echo "Failed to Connect in DB" .$conn->connect_error;
  }else{
    //echo "Connect Success";
  }
?>