<?php
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
header("Refresh: 2; url=./index.html");
ob_end_flush();
?>