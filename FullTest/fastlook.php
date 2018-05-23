<div class="text-center margin--top-100 margin--bottom-50">
	<h1 class="section--single-title">En Son Ürünler</h1>
	<div class="js__product_owlcarousel owl-carousel owl--style-basic" data-item="4">
		<?php include_once('services/manage.php'); 
		$allUrun = getItems();
		if(count($allUrun) != 0){
			foreach ($allUrun as $Item) {
				echo'
				<div class="item">
				<div class="item--portfolio">
				<a href=item-details.php?view="'.$Item["idItem"].'" class="item--thumbnail">
				<img src="'. $Item['picture'] . '" alt="">
				<span><i class="icon fa fa-leaf"></i>Detay</span>
				</a>
				<a href=item-details.php?view="'.$Item["idItem"].'" class="item--content">
				<h4 class="item--title">'. $Item['name'] . '</h4>
				<div class="item--category">'. $Item['time'] . '</div>
				</a>
				</div>
				</div>';
			}
		}
		else {
			include ("contents/statics/404-content.php");
		}
		?>
	</div>	
	
	<h1 class="section--single-title">En Son Yerel Marketler</h1>
	<div class="js__product_owlcarousel owl-carousel owl--style-basic" data-item="4">
		<?php include_once('services/manage.php'); 
		$allUrun = getLocalMarkets();
		if(count($allUrun) != 0){
			foreach ($allUrun as $Item) {
				echo'
				<div class="item">
				<div class="item--portfolio">
				<a href=local-market-details.php?view="'.$Item["idLocalMarket"].'" class="item--thumbnail">
				<img src="'. $Item['picture'] . '" alt="">
				<span><i class="icon fa fa-leaf"></i>Detay</span>
				</a>
				<a href=local-market-details.php?view="'.$Item["idLocalMarket"].'" class="item--content">
				<h4 class="item--title">'. $Item['name'] . '</h4>
				</a>
				</div>
				</div>';
			}
		}
		else {
			include ("contents/statics/404-content.php");
		}
		?>
	</div>
</div>