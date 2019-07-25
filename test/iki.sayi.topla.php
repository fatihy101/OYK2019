<!DOCTYPE html>
<html>
<body>
<?php if (!isset($_POST["sayi1"])) {  ?>



 <h2>İki Sayi Toplamı</h2>

<form method="post">
  1. sayıyı giriniz:
  <input type="text" name="sayi1" placeholder="Sayı giriniz">
  <br><br>
  2. sayıyı giriniz:
  <input type="text" name="sayi2" placeholder="Sayı giriniz">
  <br><br>
    <input type="submit" value="Gönder">
</form>



<p>İki sayıyı girip GÖNDER düğmesine basarak toplamı elde edebilirsiniz.</p>
<?php } ?>

<?php
if (isset($_POST["sayi1"])) {
  $a=$_POST["sayi1"];
  $b=$_POST["sayi2"];
  $sonuc =$a+$b;
  echo "<h3>Sonuç:</h3> $sonuc ";
  echo "<br /><a href='?'>Yeni İşlem...</a>";
}

 ?>

</body>
</html>
