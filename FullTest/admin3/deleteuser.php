<?php 

include("database.php");
ob_start();
session_start();


?>

<?php

	$id=$_GET["uid"];
mysql_query("DELETE FROM Member  where idMember=$id ");
 
 header("location:adminviewuser.php");

    
 ?>
	