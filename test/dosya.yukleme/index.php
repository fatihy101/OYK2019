
<?php
//print_r($_FILES); GELEN DOSYA HAKKINDA BİLGİLERİ GÖSTER
if(isset($_POST["DOSYA"])){//Formdan bir dosya seçilerek "Gönder" düğmesine basılmnıştır.
$HEDEF_KLASOR = "uploads/";
$HEDEF_DOSYA_ADI = $HEDEF_KLASOR . basename($_FILES["DOSYA"]["name"]);

  if (move_uploaded_file($_FILES["DOSYA"]["tmp_name"], $HEDEF_DOSYA_ADI)) {
        echo "The file ". basename( $_FILES["DOSYA"]["name"]). " adlı dosya yüklendi.";
    } else {
        echo "Dosya yüklenemedi.";
    }

}
?>

<h1>Dosya Yükleme</h1>
<form enctype="multipart/form-data" method="post">
  Yüklenecek dosyayı seçiniz: <input type="file" name="DOSYA">
  <br> <br>
  <input type="submit" name="yukle" value="Dosyayı Yükle" />
</form>
