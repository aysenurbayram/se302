<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include ("contents/statics/settings.php");?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio_detail.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Yerel Market Detayı</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <a href="local-market.php">Yerel Marketler</a> / <span>Yerel Market Detayı</span>
		</nav>
		<div class="text-center">
			<div class="nav--top clearfix">
				<a class="link--back pull-left link--color-gm" href="local-market.php"><i class="fa fa-chevron-left"></i> Yerel Marketlere Geri Dön</a>
				<?php
				include "services/db_baglan.php";
				$duzenle=$_GET["view"];
				$sql = mysql_query("SELECT AVG(Local_Market_Puan) FROM LocalMarket_Puan WHERE idLocalMarket = $duzenle");
				$local_market_puan=mysql_result($sql,0);
				?>			
<form method = "POST" action = "#">
				
				<?
				if($_SESSION['mail']){
					echo'
					Yerel Markete Puan ver :
					<select name="Local_Market_Puan">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<input type="submit" name="puanver" value="Puan Ver" class="" id="" name ="puan_ver">
					';
					}else{
			}
					?>
					
					
				</div>
				<div class="col--center text-left margin--top-100">
					<?php include_once('services/manage.php'); 
					$allMarkets = getLocalMarketDetails();

					if(count($allMarkets) != 0){
						foreach ($allMarkets as $market) {
							echo '
							<div class="portfolio--full-img">
							<img src="' . $market['picture'] . '" alt="">
							</div>
							<h2 class="portfolio--detail-title">' . $market['name'] . '</h2>
							<div class="text--content portfolio--detail-content">
							</div>
							<ul class="list--two-side">
							<li><strong class="pull-left">Yerel Market ID</strong><span class="pull-right"><input type="text" name="idLocalMarket" value="'.$market['idLocalMarket'].'" placeholder="idLocalMarket" id="input-name1" class="form-control" style="background-color:transparent; border: none; float: right; text-align:right" width:100%" readonly></span></li>
							<li><strong class="pull-left">Yerel Market Puanı</strong><span class="pull-right">'.$local_market_puan. ' / 10</span></li>
							<li><strong class="pull-left">Telefon</strong><span class="pull-right">' . $market['phone'] . '</span></li>
							<li><strong class="pull-left">E-mail</strong><span class="pull-right">' . $market['mail'] . '</span></li>
							<li><strong class="pull-left">Adres</strong><span class="pull-right">' . $market['address'] . '</span></li>
							<li><strong class="pull-left">Plaka</strong><span class="pull-right">' . $market['Location_idLocation'] . '</span></li>
							<li><strong class="pull-left">Kod</strong><span class="pull-right">' . $market['idLocalMarket'] . '</span></li>
							</ul>
							<input type="text" name="mail" value="'.$_SESSION['mail'].'" placeholder="" id="input-name1" class="inp--text" style="border: none; background-color:white; color:transparent" readonly>
</form>';
						}
					}
					else {
						include ("contents/statics/404-content.php");
					}
					if($_SESSION['mail']){
					include ("comment_Local_Market.php");
																}else{
				include ("uyelik_hatasi.php"); 
			}
					?>
					
<?php
				if(isset($_POST['puanver']))
{ 
			include "db_baglan.php";	
			
			$idLocalMarket = $_POST['idLocalMarket'];	
			$mail = $_POST['mail'];	
			$Local_Market_Puan = $_POST['Local_Market_Puan'];	

			if((empty($Local_Market_Puan))  ){
						echo'<div id = "kayitbasarilicart">';
		echo '<script type="text/javascript">alert("Puan Verme işlemi başarısız!");</script>';
		header("Location:local-market.php");
						echo'</div>';
	}else{
		$sorgu = mysql_query("insert into LocalMarket_Puan(idLocalMarket, mail,Local_Market_Puan) VALUES ('$idLocalMarket','$mail','$Local_Market_Puan')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					header("Location:index.php");
					echo '<script type="text/javascript">alert("Puan Verme işlemi başarılı!");</script>';
					echo'</div>';
					echo "<meta http-equiv='refresh' content='0'>";
			}
			else{
				header("Location:local-market.php");
				echo '<script type="text/javascript">alert("Puan Verme işlemi başarısız! Puan vermeye çalıştığınız Yerel Markete zaten puan verdiniz.");</script>';
			}
	}
	
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