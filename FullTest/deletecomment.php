<?php 

include("database.php");
ob_start();
session_start();


?>

<?php

 $id=$_POST["commentid"];

$bid= mysql_query("Select Blog_idBlog from Comment WHERE idComment=$id ");
$b=mysql_fetch_array($bid);
  mysql_query("DELETE FROM Comment WHERE idComment=$id ");
 $i=$b['Blog_idBlog'];
 
  header("location:blog-details.php?bid=$i");


?>  
 
	