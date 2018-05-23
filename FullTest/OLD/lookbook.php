<!DOCTYPE html>
<html lang="en">
<?php include("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Neyin Zamanı</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>Neyin Zamanı</span>
		</nav>
		<div class="text-center">
			<div class="item--lookbook-header text-center margin--top-60">
				<h1 class="item--title">Mevsiminde Organik Ürünler</h1>
			</div>
			<div class="js__filter_wrap">
				<div class="shop--top shop--lookbook">
					<span class="pull-left shop--left">Filtrele</span>
					<div class="shop--filter-lookbooks">
						<div class="shop--select select--style-small">
							<p><center><h3><a class="current-cat" href="loobook_yaz.php">Yaz</a>  
								&nbsp; &nbsp; &nbsp;	<a href="loobook_kis.php">Kış</a>&nbsp; &nbsp; &nbsp; 	
								<a href="loobook_ilkbahar.php">İlkbahar</a> &nbsp; &nbsp; &nbsp;	
								<a href="loobook_sonbahar.php">Sonbahar</a></h3></center></p>
							</div>
							<div class="shop--filter-lookbook">
							</div>
							<div class="item--split"></div>
						</div>
					</div><!-- js__filter_control -->
					<?php
					include_once('services/manage.php'); 
					$allUrun = getItems();

					if(count($allUrun) != 0){
						foreach ($allUrun as $Item) {
							echo '
							<div class="item--product-grid">
							<div class="item--images-container">
							<a href=item-details.php?view="'.$Item["idItem"].'"><img src="' . $Item['picture'] .'" width=350px; height= 350px alt=""></a>
							</div>
							<a href="#" class="item--link">
							<h4 class="item--title"><a href=item-details.php?view="'.$Item["idItem"].'">' . $Item['name'] . '</a></h4>
							</a>
							</div>';
						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
			</div>
		</div>
		
	</div>
	<?php include ("contents/statics/footer.php"); ?>
	<div class="back-to-top js__back_to_top"><img src="assets/images/icon-to-top.png" alt=""><br>Başa Dön</div>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>