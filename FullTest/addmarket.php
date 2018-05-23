<?php
include("database.php");
ob_start();
session_start();
$target_path = "images/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);




$name=$_POST["name"];
$tel=$_POST["phone"];
$mail=$_POST["email"];
$adres=$_POST["adres"];
$aciklama=$_POST["aciklama"];
$sehir=$_POST["sehir"];

 $sql = mysql_num_rows(mysql_query("select * from LocalMarket where address='$adres'"));
		if ($sql > 0){
 header("location:adminviewlocalmarket.php?error=error  ");
		}
else{
move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path);

mysql_query("insert into LocalMarket  (idLocalMarket, name, phone, mail, address, picture,description,Location_idLocation) VALUES (NULL,'$name','$tel' ,'$mail','$adres', '$target_path','$aciklama', '$sehir') ");



  header("location:adminviewlocalmarket.php");

}




?>