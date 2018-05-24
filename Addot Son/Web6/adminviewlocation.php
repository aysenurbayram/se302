<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

.center {
    margin: auto;
    width: 60%;
    padding: 10px;
}
</style>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

	  <link rel="stylesheet" href="assets/styles/style.min.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
        <script src="assets/scripts/jquery-1.12.3.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
	 <script src="assets/scripts/profil.js"></script>
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
	  <script src="assets/styles/profil.js"></script>
	 <style>
a {
    color: black;
}
a:hover {
    color: green;
}
</style>
  </head>

<body>
<div id="js__hammer" class="menumobile--overlay js__menu_close"></div>
<nav class="menu--navbar-wrapper">
	<div class="menu--navbar menumobile--navbar js__menu_mobile">
		<div class="menumobile--close-btn js__menu_close">
			<span class="glyphicon glyphicon-remove"></span> CLOSE
		</div>
		<div id="menu--mobile">
<?php include ("adminmenu-navigator.php"); ?>
	</div>
</nav><!--/.menu- -navbar-wrapper -->
<div class="mobile--sticky js__menu_sticky">
	<div class="container">
		<div class="pull-left">
			<a href="" class="logo"><img style="height: 120px;" alt="" src="assets/images/son.png"></a>
		</div>
		<div class="pull-right">
			<button type="button" class="menumobile--toggle js__menu_toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
</div>
<div id="wrapper">
	<header class="ossvn--header">
		<div class="container">
			<a href="" class="logo--header"><img src="assets/images/son.png" alt=""></a>
			<div class="header--right">
				<button type="button" class="menumobile--toggle js__menu_toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="menu--header">
					<ul class="menu menu--inline linkwrap--hover-line-bottom">
						<li><a href="#"><i class="icon fa fa-user-md"></i> Arama</a></li>
				
					</ul>
				</div>
				<div class="dropdown--address js__tab_plugin" data-toggle="yes" data-outside="yes">

				</div>
			</div>
		</div>
	</header><!--/.ossvn- -header -->

    <nav class="menu--navbar-wrapper">
		<div class="container">
			<div class="menu--navbar animation--top menudesktop--navbar">
				<div id="menu--navbar" class="js__auto_correct_sub_menu">
<?php include ("adminmenu-navigator.php"); ?>
				</div><!--/#menu- -navbar -->
			</div>
		</div>
    </nav><!--/.menu- -navbar-wrapper -->
	
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/Location.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Lokasyonlar</h2>
		</div>
	</div>
	
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="admin-panel.php">Anasayfa</a> / <span>Lokasyonlar</span>
		</nav>
		
<!--

......................................LOKASYON GÖRÜNTÜLEMEK  İÇİN............................

-->
 <?php
					  if (!isset($_GET["msg"])) {
						 
					 ?>


<table id="customers">
  <tr>
    <th>Şehir Kodu</th>
	 <th>Adı</th>
  </tr>
  <?php
   include("database.php"); 
  $sehir=mysql_query("select * from Location ");
		 
	  
 while ($row = mysql_fetch_array($sehir)) {

$id=$row['idLocation'];
  echo"<td><a href='sehir-detail.php?sid=$id'>".$row['idLocation']."</td>";
  echo"<td>".$row['name']."</td>";


  
 
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>

<!--

.......................................LOKASYON EKLEMEK İÇİN..................... 

-->
<?php
					  }
					  ?>

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'add'){
						  ?>
<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocation.php"><i class="fa fa-chevron-left"></i>Lokasyonlara Geri Dön</a>
				</div>


<table id="customers">
  <tr>
    <th>Şehir Kodu</th>
	 <th>Adı</th>
  </tr>
  <?php
   include("database.php"); 
  $sehir=mysql_query("select * from Location ");
		 
	  
 while ($row = mysql_fetch_array($sehir)) {

$id=$row['idLocation'];
  echo"<td><a href='sehir-detail.php?sid=$id'>".$row['idLocation']."</td>";
  echo"<td>".$row['name']."</td>";


  
 
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>


	<br>
	<br>
	
<!--
lokasyon ekleme formu
-->
 <div class=" col-md-8 col-md-offset-2">
        	<div class="panel panel-default"  >
        		<div class="panel-heading">
			    		<h3 class="panel-title">Lokasyon Detayları </h3>
			 			</div>
						<div class="panel-body">
			   
			   <div class="row">
								



		<form class="form-horizontal"  id="bootstrapSelectForm" method="post" action="addLocation.php" enctype="multipart/form-data">
	

<div class="form-group" >
        <label class="col-xs-3 control-label"> </label>
        <div class="col-xs-5 selectContainer">
	<?php
	   include("database.php"); 
		
					   ?>
					   <br>
					   <br>
		
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Şehir Kodu</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">

               <input name="kodu" placeholder="kod" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Adı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="name" placeholder="adı" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>

	<div class="form-group" >
 <div class="col-md-10">
 <button type="submit" class="btn btn-md btn-success pull-right" name="edit">Kaydet</button>
 
	</div>
	</div>
	
	
	
	
	


</form>




<div>




<?php
					  }
					  ?>

			
<!--

................................MARKET SİLMEK İÇİN..............................

-->

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'delete'){
						  ?>
	<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocation.php"><i class="fa fa-chevron-left"></i>Lokasyonlara Geri Dön</a>
				</div>

						  <div class="alert alert-info">
  <strong></strong> Silmek istediğiniz lokasyonu  seçiniz.
</div>
		
<table id="customers">
  <tr>
    <th>Şehir Kodu</th>
	 <th>Adı</th>
   
  </tr>
  <?php
   include("database.php"); 
 $sehir=mysql_query("select * from Location ");
		 
	  
 while ($row = mysql_fetch_array($sehir)) {

$id=$row['idLocation'];
  echo"<td><a href='sehir-detail.php?sid=$id & msg=sil '>".$row['idLocation']."</td>";
  echo"<td>".$row['name']."</td>";
 echo "</tr>"; 
 
 }
  
			  
			 ?>   
</table>

	
	<?php
					  }
					  ?>
		

</body>

				
	
				
				
			</div><!--/.row -->
		

			
	</div><!--/#wrapper -->
	
			
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="asdasdasdhttp://demo.comfythemes.com/tomoko-html/assets/script/html5shiv.min.js"></script>
      <script src="http://demo.comfythemes.com/tomoko-html/assets/script/respond.min.js"></script>
  <![endif]-->
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<?php include ("script.php"); ?>
    </body>
    </html>