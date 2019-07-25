<?php
@session_start();
 ?>
<h1>Kullanıcı Girişi</h1>
<form  method="post">
  Kullanıcı adınız: <input type="text" name="user" value="">
  <br>
  <br>
  Parola: <input type="password" name="password" value="">
  <br>
  <br>
 <input type="submit" name="" value="Giriş">
</form>

<?php
if(isset($_POST["user"]))
{
  if($_POST["user"]=="ahmet" && $_POST["password"]=="123")
  {
    $_SESSION[yetkiSeviyesi]=0;
$_SESSION[girisBasarili]=1;
header("index.php");
  }
  else if($_POST["user"]=="mehmet" && $_POST["password"]="789")
  {
    $_SESSION[yetkiSeviyesi]=1;
    $_SESSION[girisBasarili]=1;
    echo "<a href ='menu2.php'>Buradan devam edebilirsiniz...</a>"
  }
  else {
    echo "Giriş hatalı!";
$_SESSION[girisBasarili]=0;
  }
}
 ?>
