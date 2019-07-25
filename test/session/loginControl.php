
<?php
@session_start();
if($_SESSION[girisBasarili]!=1) die("Yetkili değilsiniz. <a href='index.php'>Giriş sayfasına dönmek için tıklayın.</a>");
?>
<a href="sorular.php">Geri Dön</a>
-<a href="logOut.php">   Oturumu Kapat</a>
