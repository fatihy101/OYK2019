<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bilgiler";

$connection = mysqli_connect($servername,$username,$password,$dbname);
if(!$connection) die("Bir hata oluştu:". mysqli_connect_error());
//else echo "<h1>Bağlantı tamam!</h1>";


 ?>
