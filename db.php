<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "swaram";

$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$connection){
  die('Database connection failed' . mysqli_error($connection));
}

 ?>
