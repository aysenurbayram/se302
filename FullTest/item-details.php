<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php");?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio_detail.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Neyin Zamanı Detayı</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <a href="lookbook.php">Neyin Zamanı</a> / <span>Neyin Zamanı Detay</span>
		</nav>
		<div class="text-center">
			<div class="nav--top clearfix">
				<a class="link--back pull-left link--color-gm" href="lookbook.php"><i class="fa fa-chevron-left"></i> Neyin Zamanı Geri Dön</a>
			</div>
			<div class="col--center text-left margin--top-100">
				<?php include_once('services/manage.php'); 
				$allMarkets = getItemDetails();
				if(count($allMarkets) != 0){
					foreach ($allMarkets as $market) {
						echo '
						<div class="portfolio--full-img">
						<img src="' . $market['picture'] . '" alt="">
						</div>
						<h2 class="portfolio--detail-title">' . $market['name'] . '</h2>
						<div class="text--content portfolio--detail-content">
						<h4>Ürün Hakkında</h4>
						<p>'. $market['description'] .' </p>
						</div>
						<ul class="list--two-side">
						<li><strong class="pull-left">Protein</strong><span class="pull-right">' . $market['protein'] . '</span></li>
						<li><strong class="pull-left">Vitamin</strong><span class="pull-right">' . $market['vitamin'] . '</span></li>
						<li><strong class="pull-left">Şeker Oranı</strong><span class="pull-right">' . $market['seker'] . '</span></li>
						<li><strong class="pull-left">Yağ</strong><span class="pull-right">' . $market['fat'] . '</span></li>
						<li><strong class="pull-left">Karbonhidrat</strong><span class="pull-right">' . $market['carbonhydrate'] . '</span></li>
						<li><strong class="pull-left">Mineral</strong><span class="pull-right">' . $market['mineral'] . '</span></li>
						<li><strong class="pull-left">Ürün Zamanı</strong><span class="pull-right">' . $market['time'] . '</span></li>
						</ul>';
					}
				}
				else {
					include ("contents/statics/404-content.php");
				}
				?>	
				<?php include_once('services/manage.php'); 
				$allMarkets = getItemDetails_item();

				if(count($allMarkets) != 0){
					echo'<h4>Ürünün bulunduğu yerel market</h4>';
					foreach ($allMarkets as $market) {
						echo '
						<a href=local-market-details.php?view="'.$market["idLocalMarket"].'">' . $market['name'] . '</a>';
					}
				}
				else {
					include ("404-content-local-market-urun-yok.php");
				}
				?>
			</div>
		</div>
		<?php include ("fastlook.php"); ?>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>