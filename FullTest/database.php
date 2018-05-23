<?php
$host="localhost";
$db="yazilimt_todays";
$user="yazilimt_user";
$pass="283467OOoo+";
$conn=@mysql_connect($host,$user,$pass) or die("Could not Connect to Mysql");

mysql_select_db($db,$conn) or die("Could not Connect to Database");
mysql_set_charset('latin5',$conn);
?>