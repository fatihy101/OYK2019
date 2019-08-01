<?php
//Vertibanı bağlantısı açma.
$server_name = "localhost";
$user_name = "root";
$password = "root";
$dbname = "bilgiler";

$db = mysqli_connect($server_name,$user_name,$password,$dbname);

if (!$db) {
  die("Hata oluştu:". mysqli_connect_error());
}
//echo "<h1>Bağlantı tamam!</h1>";

###### ŞEHİR ADLARI İÇİN COMBO MENÜSÜ HAZIRLAMA
$SQL = "SELECT DISTINCT il FROM referandum ORDER BY il";
$rows = mysqli_query($db,$SQL);
$iller = "";
while ($row =mysqli_fetch_assoc($rows))
{
  $iller .= sprintf("
<option value='%s'>%s</option> \n", $row["il"],$row["il"]);
}

 ?>

<form method="get">
Litfen şehir seçiniz: <select name = "sehir"> <?php  echo iller ?> </select>
<input type="submit" name="" value="Getir!">
</form>

<?php

$SEHIR = $_GET["sehir"];
$SQL   = "SELECT il, ilce, evet, hayir FROM referandum WHERE il = $SEHIR";
$rows  = mysqli_query($db,$SQL);

$kayitsayisi = mysqli_num_rows($rows);
if ($kayitsayisi==0) {
  echo "veri bulunamadı";
}


 ?>
