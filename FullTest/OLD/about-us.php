<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_about_us.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Hakkımızda</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>Hakkımızda</span>
		</nav>
		<img src="assets/images/thumb_about_us.jpg" alt="">
		<div class="row text-center">
			<div class="col-md-5">
				<div class="item--about-us">
					<h1 class="item--title"><i>Yaşam felsefemiz:</i></h1>
					<h3 class="item--quote"><i>"The only think I like better than talking about food is eating."</i></h3>
					<cite class="item--author">John Walters - Famer</cite>
				</div>
			</div>
			<div class="col-md-6">
				<div class="item--about-content">
					<img src="assets/images/logo-about.png" alt="" class="item--logo">
					<h2 class="item--title"><i>Taze organik gıdaları kalbinize getirin</i></h2>
					<p class="item--p-top">Sitemiz 2018 yılı ile faaliyete başlamış bir sosyal ağdır. Işık Üniversitesi öğrencileri tarafından SE302 kodlu Software Engineering Practice dersi kapsamında geliştirilmiştir.</p>
					<p>Sosyal ağımıza eklenen hiçbir içeriin reklam kaygısı olmadığını belirtmekten mutluluk duyarız. </p>
					<p>Dileyen herkes üye olabilir, blog yazılarına yorum atabilir, sitede olmayan bir ürün keşfettiğinde onu önerebilir. Blog demişken... Üyeliği onaylanmış yazarlarımız tarafından profesyonelce kaleme alınmış yazılar paylaşılıyor. Öğreniyoruz, öğrenmeyi de seviyoruz. Güzel ülkemiz, Türkiye'mizin yerli üreticisini tüketiciyle buluşturmayı hedefliyoruz. Bunun için kesinlikle hiçbir ücret almadan sitemizde yayınlıyoruz.</p>
					<i class="fa fa-leaf icon"></i>
				</div>
			</div>
		</div>
		<?php include ("contents/statics/tags.php"); ?>
		<?php
		include ("contents/statics/statistics.php"); 
		?>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>