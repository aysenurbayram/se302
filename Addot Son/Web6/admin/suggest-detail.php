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
		
		
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Önerilen Ürün Detayı</h2>
			</div>
		</div>
		
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="admin-panel.php">Başlangıç</a> / <a href="adminviewsuggest.php">Öneriler</a> / <span>Önerilen Ürün Detayı</span>
			</nav>
			
			<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewsuggest.php"><i class="fa fa-chevron-left"></i> Önerilere Geri Dön</a>
				</div>

				<div class="col--center text-left margin--top-100">

					<?php
					include('database.php');
					$id=$_GET["sid"];
					$sql=mysql_query("select * from suggest_item where suggest_item_id=$id ");
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
							<li><strong class="pull-left">Karbonhidrat</strong><span class="pull-right">' . $item['carbonhydrate'] . '</span></li>
							<li><strong class="pull-left">Mineral</strong><span class="pull-right">' . $item['mineral'] . '</span></li>
							
							<li><strong class="pull-left">Şeker Oranı</strong><span class="pull-right">' . $item['sugar'] . '</span></li>
							<li><strong class="pull-left">Yağ</strong><span class="pull-right">' . $item['fat'] . '</span></li>
							<li><strong class="pull-left">Zamanı</strong><span class="pull-right">' . $item['time'] . '</span></li>
							<li><strong class="pull-left">Zamanı</strong><span class="pull-right">' . $item['referance'] . '</span></li>
							
							';
							
	$sehir=$item['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $location = mysql_fetch_array($s);
  
echo '<li><strong class="pull-left">Zamanı</strong><span class="pull-right">' . $location['name'] . '</span></li>';
	
 $marketid=$item['idLocalMarket'];
   $s=mysql_query("select * from LocalMarket where idLocalMarket=$marketid ");
  $market = mysql_fetch_array($s);
  
  echo'<li><strong class="pull-left">Zamanı</strong><span class="pull-right">' . $market['name'] . '</span></li>';

					echo '</ul>';		
							
							


?>

	<div class="center">
		<a href="approveitem.php?itemid=<?php echo $item['suggest_item_id'];?>" class="btn btn-primary a-btn-slide-text" name="onay">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span><strong>Onayla</strong></span>            
    </a>

    <a href="disaproveitem.php?itemid=<?php echo $item['suggest_item_id'];?>" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>İptal et</strong></span>            
    </a>	
	</div>
				
				

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