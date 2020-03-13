<?php
session_start();
ob_start();
session_destroy();
echo "Güvenli Bir Şekilde Çıkış Yaptınız Anasayfaya Yönlendiriliyorsunuz..";
header("Refresh: 1; url=../index.php");
ob_end_flush();
?>