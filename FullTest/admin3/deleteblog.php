<?php 

include("database.php");
ob_start();
session_start();


?>

<?php

 $id=$_POST["blogid"];
 mysql_query("DELETE FROM Blog WHERE idBlog=$id ");
 
  header("location:adminviewblog.php");

    
 
 
	?>