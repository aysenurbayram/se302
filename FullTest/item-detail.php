<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
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
			<a href="index.html" class="logo"><img src="assets/images/son.png" alt=""></a>
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
			<a href="" class="logo--header"><img src="assets/images/son.png" style="height:120px" alt=""></a>
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
		
		
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio_detail.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Ürün Detayı</h2>
			</div>
		</div>
		
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="admin-panel.php">Başlangıç</a> / <a href="adminviewitem.php">Ürünler</a> / <span>Ürün Detayı</span>
			</nav>
			
			<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewitem.php"><i class="fa fa-chevron-left"></i> Ürünlere Geri Dön</a>
				</div>

				<div class="col--center text-left margin--top-100">

					<?php include('database.php'); 
					
			
					$id=$_GET["item"];
					$sql=mysql_query("select * from Item where idItem=$id ");
$item=mysql_fetch_array($sql);
							echo '

							<div class="portfolio--full-img margin--top-100">
							<img src="' . $item['picture'] . '" alt="">
							</div>

							<h2 class="portfolio--detail-title">' . $item['name'] . '</h2>
							<div class="text--content portfolio--detail-content">
							<p>' . $item['description'] .' </p>
							</div>
							

							<ul class="list--two-side">
							<li><strong class="pull-left">Protein</strong><span class="pull-right">' . $item['protein'] . '</span></li>
							<li><strong class="pull-left">Vitamin</strong><span class="pull-right">' . $item['vitamin'] . '</span></li>
							<li><strong class="pull-left">Şeker Oranı</strong><span class="pull-right">' . $item['seker'] . '</span></li>
							<li><strong class="pull-left">Karbonhidrat</strong><span class="pull-right">' . $item['carbonhydrate'] . '</span></li>
							<li><strong class="pull-left">Mineral</strong><span class="pull-right">' . $item['mineral'] . '</span></li>
							<li><strong class="pull-left">Yağ</strong><span class="pull-right">' . $item['fat'] . '</span></li>
							<li><strong class="pull-left">Zamanı</strong><span class="pull-right">' . $item['time'] . '</span></li>
							</ul>
							';






				
					?>


				
				 <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'sil'){
						  ?>
						   <form action="deleteitem.php" method="post">	
			<input type="hidden" name="itemid" value="<?php echo $item['idItem']?>">			   
<input type="submit" name="deleteitem" value="Sil" class="btn btn-info btn-block">
</form>

<?php
					  }
					  ?>

				</div>
				
				
	
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