				<div class="col-lg-3 col-sm-4 col-xs-12">
					<aside class="widget widget_search widget--no-title js__tab_plugin" data-toggle="yes">
						<h3 class="widget-title js__tab_control">Bul, getir</h3>
						<div class="js__tab_content widget--content">
								<form method="POST" name ="form" action="search_blog.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Blog Ara" type="text" value="" name ="title">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</aside><!-- .widget_search -->

					<aside class="widget widget_categories widget--list js__tab_plugin js__menu_click" data-toggle="yes">
						<h3 class="widget-title js__tab_control">Kategoriler</h3>
						<div class="js__tab_content widget--content">
							<ul>
								<li class="current-cat"><a href="blog.php">Tüm Bloklar</a></li>
								<li><a href="blog-saglikli-yasam.php">Sağlıklı Yaşam</a></li>
								<li><a href="blog-spor.php">Spor</a></li>
								<li><a href="blog-doga.php">Doğa</a></li>
								<li><a href="blog-organik.php">Organik</a></li>
							</ul>
						</div>
					</aside>

					<?php include ("blog-adv.php"); ?>
				</div>