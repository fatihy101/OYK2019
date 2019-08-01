<?php
require("db.php");

 ?>

<body>

  <form method="post">
 <h1>Veritabanına Sayı Kaydetme</h1>
 Birinci sayıyı giriniz: <input type="text" name="sayi1" value="">
 <br><br>
 İkinci sayıyı giriniz: <input type="text" name="sayi2" value="">
 <br><br>
 <input type="submit" name="" value="KAYDET">

 </form>

 <p>Girilen sayıları görüntülemek için <a href="show.php">tıklayın</a></p>

</body>

<?php
if(isset($_POST["sayi1"]))
{


$SQL = sprintf("
INSERT INTO sayilar
SET
  sayi1='%s',
  sayi2='%s' ", $_POST[sayi1], $_POST[sayi2]);

$rows = mysqli_query($connection,$SQL);
echo "<h4>Kayıt Eklendi.</h4>";
}


 ?>
