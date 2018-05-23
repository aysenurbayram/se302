<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div id="wrapper">
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_blog.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Blog Detayı</h2>
			</div>
		</div>
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span>Blog</span>
			</nav>
			<div class="row">
				<?php include ("contents/statics/blog-details-inside-left.php"); ?>

				<div class="col-lg-9 col-sm-8 col-xs-12">
					<div class="blog--item blog--detail-item">
						<?php
						include_once("services/manage.php");
						$blog_post = getlAllBlogPostsDetails();
						if (count($blog_post) != 0) {
							foreach ($blog_post as $blog) { 
								echo '
								<a href="' . $blog["picture"] . '" class="item--images"><img src="' . $blog["picture"] . '" alt=""></a>
								<div class="item--date">' . $blog["date"] . '</div>
								<div class="item--category">' . $blog["category"] . '</div>
								<h2 class="item--title">
								<a href="#"><i>' . $blog["title"] . '</i></a>
								</h2>
								<ul class="item--meta">
								<li>Gönderen <a href=profile.php?view="' . $blog["Member_idMember"] .'"><strong>' . $blog["Member_idMember"] . '</strong></a></li>
								<li>Blog ID <a href=profile.php?view="' . $blog["idBlog"] .'"><strong>' . $blog["idBlog"] . '</strong></a></li>
								</ul>
								<div class="text--content">
								<p>' . $blog["text"] . '</p>';
								include ("contents/statics/blockquote.php"); 
								echo '
								</div>
								<div class="item--tag-cloud">
								<i class="fa fa-tag icon"></i> <a href="blog.php">' . $blog["category"] . '</a>
								</div>';
								if($_SESSION['mail']){
								include("comment.php");
											}else{
				include ("uyelik_hatasi.php"); 
			}
								echo ' <div class="clear"></div>
								</div><!-- Review -->
								</div>
								</div>
								</div>';
							}
						}
						else {
							include ("contents/statics/404-content.php"); 
						}
						?>	
					</div>
					<?php include ("contents/statics/footer.php"); ?>
				</div>
				<?php include ("contents/statics/script.php"); ?>
			</body>
			</html>