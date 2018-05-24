<?php 

include("database.php");
ob_start();
session_start();


?>

<?php
if($_POST["deletemarket"]){
 $marketid=$_POST["marketid"];

 
  mysql_query("DELETE FROM LocalMarket WHERE idLocalMarket=$marketid ");
 
  header("location:adminviewlocalmarket.php");

    
 }
	