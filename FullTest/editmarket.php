<?php
include("database.php");
ob_start();
session_start();
$target_path = "images/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);





$id=$_POST["id"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$adres=$_POST["adres"];
$aciklama=$_POST["aciklama"];
$sehir=$_POST["sehir"];
$sql=mysql_query("select * from LocalMarket where idLocalMarket=$id");
$s=mysql_fetch_array($sql);
$name=$s['name'];



if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path)){
mysql_query("UPDATE  LocalMarket SET  idLocalMarket='$id', name='$name', phone='$tel', mail='$mail', address='$adres',picture='$target_path', description='$aciklama', Location_idLocation='$sehir' where idLocalMarket=$id ");
 


}

else{
mysql_query("UPDATE  LocalMarket SET  idLocalMarket='$id', name='$name', phone='$tel', mail='$mail', address='$adres', description='$aciklama', Location_idLocation='$sehir'  where idLocalMarket=$id ");
 	
}



  header("location:admineditmarket.php?mid=$id ");

?>