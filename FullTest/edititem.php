<?php
include("database.php");
ob_start();
session_start();
$target_path = "images/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);





$id=$_POST["id"];
 $protein=$_POST["protein"];
$vitamin=$_POST["vitamin"];
$seker=$_POST["seker"];
$fat=$_POST["fat"];
$karbonhidrat=$_POST["karbonhidrat"];
$mineral=$_POST["mineral"];
$market=$_POST["market"]; 
$donem=$_POST["donem"];
$aciklama=$_POST["aciklama"];


$sql=mysql_query("select * from Item where idItem=$id");
$s=mysql_fetch_array($sql);
$name=$s['name'];

if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path)){
mysql_query("UPDATE Item SET  idItem='$id', name='$name', protein='$protein', vitamin='$vitamin', seker='$seker', fat='$fat', carbonhydrate='$karbonhidrat', mineral='$mineral', LocalMarket_idLocalMarket='$market' , time='$donem' , picture='$target_path', description='$aciklama' where idItem=$id ");
 


}

else{
mysql_query("UPDATE Item SET  idItem='$id', name='$name', protein='$protein', vitamin='$vitamin', seker='$seker', fat='$fat', carbonhydrate='$karbonhidrat', mineral='$mineral', LocalMarket_idLocalMarket='$market' , time='$donem' , description='$aciklama' where idItem=$id ");
 	
}

  header("location:adminedititem.php?item=$id ");





?>



