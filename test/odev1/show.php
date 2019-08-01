<?php
require("db.php");
 ?>
<body>
   <a href="index.php">Geri Dön</a>

  <h1>Sayılar Listesi</h1>
<table border = 1 cellpadding=5 cellspacing=0 >
<tr>
<td>ID</td>
<td>1.sayı</td>
<td>2.sayı</td>
<td>Toplam</td>
</tr>

<?php
$SQL = "SELECT id,sayi1,sayi2
        FROM sayilar";

$rows = mysqli_query($connection,$SQL);


while($row  = mysqli_fetch_assoc($rows))
{
$toplam = $row["sayi1"] + $row["sayi2"];

  echo sprintf("
   <tr>
   <td>%s</td>
   <td>%s</td>
   <td>%s</td>
   <td>%s</td>

   </tr>
  ",$row["id"],$row["sayi1"],$row["sayi2"],$toplam
);
}

?>


</table>
</body>
