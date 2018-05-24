<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
$mail = $_POST['mail'];
$password = $_POST['password'];

$sql_check = mysql_query("select * from Member where mail='".$mail."' and password='".$password."'") or die(mysql_error());

if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["mail"] = $mail;
    $_SESSION["password"] = $password;
 $_SESSION["role"] = $role;
header("Location:../index.php");
	
}
else {
    if($mail=="" or $password=="") {
       echo '<script type="text/javascript">alert("Kullanıcı Adı ve Parola boş olamaz!");</script>';
header("Location:../index.php");
    }
    else {
echo '<script type="text/javascript">alert("Kullanici Adi/Sifre Yanlış ya da Banlanmış Olabilirsiniz.!");</script>';
header("Location:../index.php");
    }
}
 
ob_end_flush();
?>