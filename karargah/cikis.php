<?php
session_start();
ob_start();
session_destroy();

header("Location:login.php?durum=exit");
ob_end_flush();
?>