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
<?php include ("menu-navigator.php"); ?>
	</div>
</nav><!--/.menu- -navbar-wrapper -->
<div class="mobile--sticky js__menu_sticky">
	<div class="container">
		<div class="pull-left">
			<a href="" class="logo"><img src="assets/images/son.png" alt=""></a>
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
	
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Öneriler</h2>
		</div>
	</div>
	
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="admin-panel.php">Anasayfa</a> / <span>Öneriler</span>  &nbsp;&nbsp;&nbsp;&nbsp;   
		</nav>
		
<!--


..........................ÖNERİ GÖRÜNTÜLEMEK İÇİN............................

-->
 <?php
					  if (!isset($_GET["msg"])) {
						 
					 ?>

<table id="customers">
  <tr>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
    <th>Şeker Oranı</th>
	 <th>Yağ</th>
	 <th>Karbonhidrat</th>
	 <th>Mineral</th>
	  <th>Dönem</th>
	 <th>Açıklama</th>
	  <th>Referans</th>
	  <th>Yer</th>
	  <th>Market</th>
	  
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from suggest_item ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['suggest_item_id'];
  echo"<td><a href='suggest-detail.php?sid=$id'>".$row['name']."</td>";
  echo"<td>".$row['protein']."</td>";
  echo"<td>".$row['vitamin']."</td>";
  echo"<td>".$row['seker']."</td>";
  echo"<td>".$row['fat']."</td>";
  echo"<td>".$row['carbonhydrate']."</td>";
  echo"<td>".$row['mineral']."</td>";
   echo"<td>".$row['time']."</td>";
   echo"<td>".$row['description']."</td>";
    echo"<td>".$row['referance']."</td>";
	
	$sehir=$row['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $location = mysql_fetch_array($s);
  
  echo"<td>".$location['name']."</td>";
	
 $marketid=$row['idLocalMarket'];
   $s=mysql_query("select * from LocalMarket where idLocalMarket=$marketid ");
  $market = mysql_fetch_array($s);
  
  echo"<td>".$market['name']."</td>";

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
      <script src="http://demo.comfythemes.com/tomoko-html/assets/script/html5shiv.min.js"></script>
      <script src="http://demo.comfythemes.com/tomoko-html/assets/script/respond.min.js"></script>
  <![endif]-->
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<?php include ("script.php"); ?>
    </body>
    </html>