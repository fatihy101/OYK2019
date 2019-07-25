<!DOCTYPE html>
<html>
  <head>

    <title>Dosyaya yazma</title>
  </head>
  <body>
    <form method="post">
      <p>
        Adınız: <input type="text" name="ad">
      </p>
        <p>
          Soyadınız: <input type="text" name="soyad" value="">
        </p>
            <p>
              <input type="submit" value="EKLE">
            </p>
    </form>

    <?php
if (isset($_POST["ad"])) {
  $isim = $_POST["ad"].";".$_POST["soyad"];
  echo $isim;
  $mevcut_isimler = file_put_contents("isimler.txt",$isim);
$dosya_son_durum = $mevcut_isimler.$isim;
file_put_contents("isimler.txt",$dosya_son_durum);
}
     ?>
  </body>
</html>
