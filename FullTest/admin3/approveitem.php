<?php 

include("database.php");
ob_start();
session_start();

?>

<?php

	$id=$_GET["itemid"];

$target_path = "images/";



$sql=mysql_query("select name from suggest_item WHERE suggest_item_id=$id ");
$s=mysql_fetch_array($sql);
$name=$s['name'];



$pr=mysql_query("select protein from suggest_item WHERE suggest_item_id=$id ");
$p=mysql_fetch_array($pr);
$protein=$p['protein'];

$vt=mysql_query("select vitamin from suggest_item WHERE suggest_item_id=$id ");
$v=mysql_fetch_array($vt);
$vitamin=$v['vitamin'];



$ft=mysql_query("select fat from suggest_item WHERE suggest_item_id=$id ");
$f=mysql_fetch_array($ft);
$fat=$f['fat'];



$kh=mysql_query("select carbonhydrate from suggest_item WHERE suggest_item_id=$id ");
$k=mysql_fetch_array($kh);
$karbonhidrat=$k['carbonhydrate'];


$mn=mysql_query("select mineral from suggest_item WHERE suggest_item_id=$id ");
$m=mysql_fetch_array($mn);
$mineral=$m['mineral'];



$mk=mysql_query("select idLocalMarket from suggest_item WHERE suggest_item_id=$id ");
$ma=mysql_fetch_array($mk);
$market=$ma['idLocalMarket']; 


$tm=mysql_query("select time from suggest_item WHERE suggest_item_id=$id ");
$t=mysql_fetch_array($tm);
$donem=$t['time'];



$des=mysql_query("select description from suggest_item WHERE suggest_item_id=$id ");
$d=mysql_fetch_array($des);
$aciklama=$d['description'];



$pic=mysql_query("select picture from suggest_item WHERE suggest_item_id=$id ");
$pi=mysql_fetch_array($pic);
$path=$pi['picture'];


mysql_query("insert into Item  (idItem, name, protein, vitamin, fat, carbonhydrate,mineral, LocalMarket_idLocalMarket,time,picture, description) VALUES (NULL,'$name','$protein' ,'$vitamin','$fat','$karbonhidrat', '$mineral','$market' , '$donem' , '$path','$aciklama') ");

  mysql_query("DELETE FROM suggest_item WHERE suggest_item_id=$id ");
 
    header("location:adminviewsuggest.php");

?>