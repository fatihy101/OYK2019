<?php
@session_start();
 ?>
<h1>Eğitmen Girişi</h1>
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
  if($_POST["user"]=="linux" && $_POST["password"]==sudo)
  {
$_SESSION[girisBasarili]=1;
echo "<a href='sorular.php'>Buradan devam edebilirsiniz...</a>";
  }
  else {
    echo "Giriş hatalı!";
$_SESSION[girisBasarili]=0;
  }
}
 ?>
