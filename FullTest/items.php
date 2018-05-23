<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Ürünler</h2>
			</div>
		</div>
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span>Ürünler</span>
			</nav>
			<div class="portfolio--wrap margin--bottom-50 js__isotope_wrap">
				<ul class="portfolio--filter-control text-center js__isotope_filter">
					<li><a href="portfolio-1.html#" class="js__filter_active" data-filter="*">All</a></li>
					<?php include_once('services/manage.php'); 
					$allItems = getItems();
					if (count($allItems) != 0) {
						foreach ($allItems as $item) {
							echo '
							<li><a href="#" data-filter=".spring">' . $item['time'] . '</a></li>';
						}
					}	
					?>
				</ul>
				<?php include_once('services/manage.php'); 
				$item = getItems();
				if (count($item) != 0 ) {
					foreach ($item as $it) {
						# code...
						echo '
						<ul class="row text-center js__isotope_content">
						<li class="col-md-3 col-sm-6 col-mid-6 col-xs-12 js__isotope_item spring">
						<div class="item--portfolio">
						<a href="' . $it['idItem'] . '.php" class="item--thumbnail">
						<img src="' . $it['name'] . '" alt="">
						<span><i class="icon fa fa-leaf"></i>Detayları görüntüle</span>
						</a>
						<a href="' . $it['idItem'] . '.php" class="item--content">
						<h4 class="item--title">' . $it['name'] . '</h4>
						<div class="item--category">' . $it['time'] .' </div>
						</a>
						</div>
						</li>
						</ul>';
					}
				}
				else {
					include ("contents/statics/404-content.php");
				}
				?>
			</div>
		</div>
		<?php include ("contents/statics/footer.php"); ?>
	</div>
	<?php include ("contents/statics/script.php"); ?>
</body>
</html>