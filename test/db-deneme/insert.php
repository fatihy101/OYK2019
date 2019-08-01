<?php
require(db.php);
 ?>



 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
     <h1>Kayıt Ekleme</h1>

     <form  method="post">

    Adı: <input type="text" name="adi" placeholder="Adınız">
    <br><br>
    Soyadı: <input type="text" name="soyadı" value="">
    <br><br>
    Şehir: <input type="text" name="sehir">
    <br><br>
    <input type="submit" name="" value="KAYIT EKLE">
    </form>

  </body>
</html>

<?php if(isset($_POST["adi"]))
{

    $SQL = sprintf("
    INSERT INTO
    deneme_rehber
    SET
    adi = '%s',
    soyadi = '%s',
    sehir  = '%s'  ", )

}


 ?>
