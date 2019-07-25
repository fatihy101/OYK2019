<?php
@session_start();
if ($_SESSION["girisBasarili"]==1) {

}
else
{
  header("login.php"); //Yönlendirme
  die();
}

 ?>
