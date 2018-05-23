<!DOCTYPE html>
<html lang="en">
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include ("contents/statics/settings.php"); ?>
	<div id="wrapper">
		<?php include ("header.php"); ?>
		<?php include ("menu-nav-bar.php"); ?>		
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Yerel Marketler</h2>
			</div>
		</div>
		
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span><a class="home" href="local-market.php">Yerel Marketler</a></span>
					<span style="float: right"><a class="home" href="local-marketbypoint.php">En Çok Puan Alan 10 Yerel Market</a></span>			
					<span style="float: right">Yerel Marketler Şehire Göre Sırala
						<form method="post" name ="form" action="show_localmarket_by_idlocation.php">
							<?php include("contents/statics/list-of-cities.php"); ?>
						</form>
					</span>
			</nav>
			
			<div class="text-center">

				<?php
							include "services/db_baglan.php";
							$Location_idLocation=$_POST["Location_idLocation"];
							
	$sorgu = mysql_query(" SELECT LocalMarket.idLocalMarket,LocalMarket.name,LocalMarket.phone,LocalMarket.mail,LocalMarket.address, LocalMarket.picture,LocalMarket.description, AVG(LocalMarket_Puan.Local_Market_Puan) AS ort
FROM LocalMarket_Puan, LocalMarket
WHERE LocalMarket.idLocalMarket = LocalMarket_Puan.idLocalMarket AND LocalMarket.Location_idLocation = '$Location_idLocation'
GROUP BY LocalMarket.idLocalMarket
HAVING 0 <= (SELECT AVG(LocalMarket_Puan.Local_Market_Puan) FROM LocalMarket_Puan) ORDER by AVG(LocalMarket_Puan.Local_Market_Puan) DESC ");
	
	
	$bulunan=0;
										if($sorgu){
													while($market = mysql_fetch_array($sorgu)){
									echo '
						<ul class="list--lookbook">
						<li>
						<div class="item--lookbook">
						<a href=local-market-details.php?view="'.$market["idLocalMarket"].'.php" class="item--images"><img src="' . $market['picture'] .'" alt=""></a>
						<div class="item--content">
						<h2 class="item--title"><a href=local-market-details.php?view="'.$market["idLocalMarket"].'">' . $market['name'] . '</a></h2>
						<p>'. $market['description'] .  ' </p>
						<p>Yerel Market Puanı  = '. $market['ort'] .  ' / 10 </p>
						<a href=local-market-details.php?view="'.$market["idLocalMarket"].'">devamı...</a>
						</div>
						</div>
						</li>

						</ul>
';
$bulunan++;
								}echo'<h4>Bulunan Kayıt Sayısı = '.$bulunan.'</h4>';
							}
							
													
													
										else{
											  echo "Bulunamadı!";
										}
				?>
			</div>
			
		</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>