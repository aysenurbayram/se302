<?php
include("database.php");
ob_start();
session_start();
$target_path = "images/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);



$name=$_POST["name"];
$protein=$_POST["protein"];
$vitamin=$_POST["vitamin"];
$seker=$_POST["seker"];
$fat=$_POST["fat"];
$karbonhidrat=$_POST["karbonhidrat"];
$mineral=$_POST["mineral"];
$market=$_POST["market"]; 
$donem=$_POST["donem"];
$aciklama=$_POST["aciklama"];


 $sql = mysql_num_rows(mysql_query("select * from Item where name='$name'"));
		if ($sql > 0){
 header("location:adminviewitem.php?error=error  ");
		}
else{
move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path);
mysql_query("insert into Item  (idItem, name, protein, vitamin,seker, fat, carbonhydrate,mineral, LocalMarket_idLocalMarket,time,picture, description) VALUES (NULL,'$name','$protein' ,'$vitamin','$seker','$fat','$karbonhidrat', '$mineral','$market' , '$donem' , '$target_path','$aciklama') ");


  header("location:adminviewitem.php");


}



?>