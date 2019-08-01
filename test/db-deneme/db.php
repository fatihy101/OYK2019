<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

$connection = mysqli_connect($servername,$username, $password, $dbname);
if(!$connection)
{
  die("Error:" . mysqli_connection_error());
}

 ?>
