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
						<li>
						
						<div id="pencerekodu"><label for="pencere" ><span class="glyphicon glyphicon-search"></span>

	Arama

	</label><input type="checkbox" class="Pencereac" id="pencere" name="pencere"></input><label class="pencere">

	
	<br/>
	Yerel Market Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Yerel Market Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>

<br/>
	Kullanıcı Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Kullanıcı Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	
	<br/>
	Ürün Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Ürün Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	
	
	
	
	
	
	
	<label for="pencere" class="dugme" name="kapat">Kapat</label></label></div>


	<style> .dugme{cursor:pointer;display:inline-block;padding:5px 10px;background:#eee;border:1px solid #d8d8d8;font-family:Helvetica, Arial, sans-serif;font-size:14px;color:#444; -webkit-border-radius: 3px; border-radius: 3px; } [name="kapat"]{position:absolute;bottom:20px;right:20px;} .pencere{ position:fixed;top:-50%;left:-50%; width:380px;height:330px;background:#fff;box-shadow:0 0 6px 2px rgba(0,0,0,0.4); opacity:0; transition:opacity 0.6s ease-out; z-index:-1; padding:10px; -webkit-border-radius: 3px; border-radius: 3px; margin:-150px 0 0 -200px; } .Pencereac{width:1px;height:1px;visibility:hidden;} .Pencereac:checked + .pencere{ top:35%;left:70%; display:block; z-index:19; opacity:1;}</style>


	<script src="https://www.koddostu.com/duzelt.js?no=109"></script>
</li>

					
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="glyphicon glyphicon-log-out"></span><li><a href="logout.php"><i ></i> Çıkış</a></li> 
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
	
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/location.jpg">
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
					  } 
    ?>   
</table>

	
				
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