<?php
include_once("services/manage.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_blog.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Blog</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<hr>
			<p><center><h3><a class="current-cat" href="blog-saglikli-yasam.php">Sağlıklı Yaşam</a>  &nbsp; &nbsp; &nbsp;	<a href="blog-spor.php">Spor</a>&nbsp; &nbsp; &nbsp; 	<a href="blog-doga.php">Doğa</a> &nbsp; &nbsp; &nbsp;	<a href="blog-organik.php">Organik</a></h3></center></p>
			<hr>			
			
				<a class="home" href="index.php">Başlangıç</a> / <span>Blog</span>
			</nav>

			<div class="row">

				<div class="col-md-1 col-xs-12"></div>

				<div class="col-md-9 col-xs-12">
					<ul class="blog--list">
						<li>
							<?php
							include_once("services/manage.php");
							$getlAllDogaBlogPosts = getlAllDogaBlogPosts();
							if (count($getlAllDogaBlogPosts) != 0) {

								foreach ($getlAllDogaBlogPosts as $blog_post) { 
									echo '

									<div class="blog--item">
									<a href=blog-details.php?view="'.$blog_post["idBlog"].'" class="item--images"><img src="' . $blog_post['picture'] . '"  width="600px;" height="337px"  alt=""></a>
									<div class="item--date">' . $blog_post['date'] . '</span></div>
									<div class="item--category">' . $blog_post['category']. '</div>
									<h2 class="item--title">
									<a href=blog-details.php?view="'.$blog_post["idBlog"].'">' . $blog_post['title'] . '</a>
									</h2>
									<p class="item--title">' . $blog_post['short_text'] . '</p>
									<a href=blog-details.php?view="'.$blog_post["idBlog"].'">devamı...</a>
									<ul class="item--meta">
									<li>Gönderen <a href="#"><strong>' . $blog_post['Member_idMember'] .  '</strong></a></li>									
									</ul>
									</div>

									';

								}
							}
							else {
								include ("404-content.php"); 
							}



							?>

						</li>
					</ul>
				</div><!-- .container -->
			</div>
		</div>
	</div>


<?php include ("contents/statics/footer.php"); ?>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>