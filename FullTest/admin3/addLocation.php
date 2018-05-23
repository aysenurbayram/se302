<?php
include("database.php");
ob_start();
session_start();


$kod=$_POST["kodu"];
$ad=$_POST["name"];


mysql_query("insert into Location (idLocation, name) VALUES ('$kod','$ad') ");

  header("location:adminviewlocation.php");






?>