<?php 
 
include("database.php");
ob_start();
session_start();
 
$mail = $_POST['mail'];
$password = $_POST['password'];

$sql_check = mysql_query("select * from Admin where mail='".$mail."' and password='".$password."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["mail"] = $mail;
    $_SESSION["password"] = $password;
    header("Location:./admin-panel.php");
}
else {
    if($mail=="" or $password=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>