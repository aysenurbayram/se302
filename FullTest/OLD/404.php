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
				<?php include ("menu-navigator.php"); ?>
			</div><!--/#menu- -navbar -->
		</div>
	</nav><!--/.menu- -navbar-wrapper -->
	<div class="mobile--sticky js__menu_sticky">
		<div class="container">
			<div class="pull-left">
				<a href="index.php" class="logo"><img src="assets/images/logo.png" alt=""></a>
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
		<?php include ("header.php"); ?><!--/.ossvn- -header -->

		<nav class="menu--navbar-wrapper">
			<div class="container">
				<div class="menu--navbar animation--top menudesktop--navbar">
					<div id="menu--navbar" class="js__auto_correct_sub_menu">
						<?php include ("menu-navigator.php"); ?>
					</div><!--/#menu- -navbar -->
				</div>
			</div>
		</nav><!--/.menu- -navbar-wrapper -->
		
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Sayfa bulunamadı</h2>
			</div>
		</div>
		
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span>404</span>
			</nav>
			
			<div class="text-center">
				<ul class="list--lookbook">
					<li>
						<div class="item--lookbook">
							<a href="lookbook-detail.html" class="item--images"><img src="assets/images/img_lookbook_1.jpg" alt=""></a>
							<div class="item--content">
								<h2 class="item--title"><a href="contact-us.php"><i>Yanlışlık var gibi görünüyor...</i></a></h2>
								<p>Aradığınız sayfa bulunamadı, bir sorun var gibi görünüyor. Dilerseniz bu konuyu bize bildirebilirsiniz. Lütfen kusura bakmayın :(</p>
								<a href="contact-us.php" class="button--common button--dark button--hover-main">Bize yazın<i class="fa fa-long-arrow-right icon"></i></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
		</div><!-- .container -->
		
		<?php include ("footer.php"); ?><!--/footer -->
		
	</div><!--/#wrapper -->
	<?php include ("script.php"); ?>
</body>
</html>