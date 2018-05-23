<?php 

include("database.php");
ob_start();
session_start();

?>

<?php

	$id=$_GET["uid"];
mysql_query("UPDATE Member SET  isBaned='true'  where idMember=$id ");
 
 header("location:adminviewuser.php");

?>