<?php require_once 'services/manage.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_blog.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Ürün Öner</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Home Page</a> / <span>Ürün Öner</span>
		</nav>
		<div class="row">
			<div class="col-md-1 col-xs-12"></div>
			<div class="col-md-9 col-xs-12">
				<ul class="blog--list">
					<li>
						<div class="blog--item">

							<?php
							if($_SESSION['mail']){
								include ("suggest-item-inside.php"); 
							}
							else{
								include ("uyelik_hatasi.php"); 
							}
							?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>