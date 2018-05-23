<?php
$db_adi     = "yazilimt_todays";  #Veritabanımızın Adı
$db_sunucu  = "Localhost";       #Sunucu Adı
$db_kulladi = "yazilimt_user";            #Sunucu Kullanıcı Adı
$db_sifre   = "283467OOoo+";                #Sunucu Kullanıcı Şifre

$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
mysql_query("SET NAMES UTF8");
if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
?>