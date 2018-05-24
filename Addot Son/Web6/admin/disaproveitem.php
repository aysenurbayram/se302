<?php 

include("database.php");
ob_start();
session_start();


?>

<?php

 $itemid=$_GET["itemid"];

 
  mysql_query("DELETE FROM suggest_item WHERE suggest_item_id=$itemid ");
 
  header("location:adminviewsuggest.php");
?>
    
 
	