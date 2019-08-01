<?php
require("db.php");
include("sabitler.php");

 ?>

  <body>
    <form  method="post" autocomplete="on">
      <h1>Kullanıcı Kayıt</h1>
      E-posta: <input type="text" name="eposta" required value="">
      <br><br>
      Ad Soyad : <input type="text" name="adsoyad" required value="">
      <br><br>
      Parola: <input type="password" name="parola" required value="">
      <br><br>
      tür   :
      <select name = "tur">

        <option value="">SEÇİNİZ</option>
        <option value="E">Esnaf</option>
        <option value="M">Müşteri</option>
      </select>
      <br><br>
      <input type="submit" value="KAYDET">

    </form>
  </body>
<a href="giris.php">Giriş yapmak için tıklayın</a>
  <?php
  $PAROLA = md5($_POST["parola"] . $TUZ);

if(isset($_POST["adsoyad"]))
{
 $SQL = "SELECT * FROM kullanicilar WHERE eposta = '{$_POST["eposta"]}'";
 $rows = mysqli_query($connection, $SQL);
$kayitSayisi = mysqli_num_rows($rows);
if($kayitSayisi!=0){
  die("\nBu e-posta daha önce kullanılmış!");
}

  if($_POST["tur"]=="") die("tür seçimi yapılmamış.");
$SQL =sprintf("
 INSERT INTO kullanicilar
 SET
    eposta ='%s',
    adi_soyadi ='%s',
    parola = '%s',
    tur = '%s'",
$_POST["eposta"],$_POST["adsoyad"], $PAROLA, $_POST["tur"]
);
$rows = mysqli_query($connection,$SQL);
echo "<h4>Kayıt Eklendi.</h4>";

}

?>
