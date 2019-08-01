<!DOCTYPE html>
<html>
<body>
<?php

if (!isset($_GET["sayi1"])) {  ?>



 <h2>Üç Sayi Toplamı</h2>

<form method="get">
  1. sayıyı giriniz:
  <input type="text" name="sayi1" placeholder="Sayı giriniz">
  <br><br>
  2. sayıyı giriniz:
  <input type="text" name="sayi2" placeholder="Sayı giriniz">
  <br><br>
  3. sayıyı giriniz:
  <input type="text" name="sayi3" placeholder="Sayı giriniz">
  <br><br>
    <input type="submit" value="Gönder">
</form>



<p>İki sayıyı girip GÖNDER düğmesine basarak toplamı elde edebilirsiniz.</p>
<?php } ?>

<?php
if (isset($_GET["sayi1"])) {
  $a=$_GET["sayi1"];
  $b=$_GET["sayi2"];
  $c=$_GET["sayi3"];

  $sonuc =$a+$b+$c;
  echo "<h3>Sonuç: $a+$b+$c = $sonuc </h3>";
  echo "<br /><a href='?'>Yeni İşlem...</a>";
}

 ?>

</body>
</html>
