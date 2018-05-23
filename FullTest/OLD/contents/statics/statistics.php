<?php 
include("services/db_baglan.php");
				$sql_item_count = mysql_query("SELECT COUNT(*) FROM Item");
				$itemCount=mysql_result($sql_item_count,0);				
				
				$sql_blogCount = mysql_query("SELECT COUNT(*) FROM Item");
				$blogCount=mysql_result($sql_blogCount,0);				
				
				$sql_memberCount = mysql_query("SELECT COUNT(*) FROM Member");
				$memberCount=mysql_result($sql_memberCount,0);				
				
				$sql_localMarketCount = mysql_query("SELECT COUNT(*) FROM LocalMarket");
				$localMarketCount=mysql_result($sql_localMarketCount,0);
			echo '
			<ul class="section--counter row text-center">
				<li class="col-md-3 col-sm-6 col-mid-6 col-xs-12">
					<div class="item--counter">
						<div class="item--number js__counter" data-num="' . $itemCount . '">0</div>
						<div class="item--title">Eklenmiş toplam ürün</div>
					</div>
				</li>
				<li class="col-md-3 col-sm-6 col-mid-6 col-xs-12">
					<div class="item--counter">
						<div class="item--number js__counter" data-num="' . $blogCount . '">0</div>
						<div class="item--title">Yazılmış blog miktarı</div>
					</div>
				</li>
				<li class="col-md-3 col-sm-6 col-mid-6 col-xs-12">
					<div class="item--counter">
						<div class="item--number js__counter" data-num="' . $memberCount . '">0</div>
						<div class="item--title">Toplamda kaç kişiyiz</div>
					</div>
				</li>
				<li class="col-md-3 col-sm-6 col-mid-6 col-xs-12">
					<div class="item--counter">
						<div class="item--number js__counter" data-num="' . $localMarketCount .'">0</div>
						<div class="item--title">Toplam yerel market</div>
					</div>
				</li>
			</ul>
			';
			?>