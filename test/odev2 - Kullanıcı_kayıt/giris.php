<?php
require("db.php");
include("sabitler.php");
 ?>

  <body>
    <form  method="post">
      <h1>Kullanıcı Girişi</h1>
      Ad Soyad : <input type="text" name="adsoyad" required value="">
      <br><br>
      Parola: <input type="password" name="parola" required value="">
      <br><br>
      <input type="submit" value="Giriş Yap">

    </form>
  </body>

<?php
$PAROLA = md5($_POST["parola"] . $TUZ);
$SQL = "SELECT *
         FROM
          kullanicilar
           WHERE
           adi_soyadi = '{$_POST["adsoyad"]}' AND parola = '$PAROLA' ";

$rows = mysqli_query($connection,$SQL);

if(isset($_POST["parola"]))
      {
      $kayitSayisi = mysqli_num_rows($rows);

        if ($kayitSayisi==0) {
          echo "Kayıt bulunamadı";
        }
        else if($kayitSayisi==1)
        {
          echo "Giriş başarılı.";
        }
}
 ?>
