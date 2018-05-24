<?php 

include("database.php");
ob_start();
session_start();


?>

<?php
if($_POST["deletelocation"]){
 $locationid=$_POST["locationid"];

 
  mysql_query("DELETE FROM Location WHERE idLocation=$locationid ");
 
  header("location:adminviewlocation.php");

    
 }
	