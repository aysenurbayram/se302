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

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">' . $itemCount . '</div>
              <div class="title">Ürün Sayısı</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">' . $blogCount . '</div>
              <div class="title">Blog Sayısı</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">' . $memberCount . '</div>
              <div class="title">Kullanıcı Sayısı</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">' . $localMarketCount . '</div>
              <div class="title">Yerel Market Sayısı</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
		';
		?>