<?php 

include("database.php");
ob_start();
session_start();


?>

<?php
if($_POST["deleteitem"]){
 $itemid=$_POST["itemid"];

 
  mysql_query("DELETE FROM Item WHERE idItem=$itemid ");
 
  header("location:adminviewitem.php");

    
 }
	