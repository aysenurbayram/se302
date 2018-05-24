<html lang="en">
<?php include ("contents/statics/head.php"); ?>

<body>
	<?php include("contents/statics/adminsettings.php"); ?>
	
	
	
	
	
	

	<div id="wrapper">
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/blogfoto.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Blog Detayı</h2>
			</div>
		</div>
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span>Blog</span>
			</nav>
			<div class="row">
				
					<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewblog.php"><i class="fa fa-chevron-left"></i>Bloglara Geri Dön</a>
				</div>

				<div class="col-lg-9 col-sm-8 col-xs-12">
					<div class="blog--item blog--detail-item">
						<?php
						include('database.php');
						
						$id=$_GET["bid"];
					$sql=mysql_query("select * from Blog where idBlog=$id ");
$blog=mysql_fetch_array($sql);
						
						
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
							
								echo '
								</div>
								<div class="item--tag-cloud">
								<i class="fa fa-tag icon"></i> <a href="blog.php">' . $blog["category"] . '</a>
								</div>';
								
							
								include('comment.php');
										
			
							?>
							<form action="deleteblog.php" method="post">	
			<input type="hidden" name="blogid" value="<?php echo $id;?>	">		   
<input type="submit" name="deleteblog" value="Sil" class="btn btn-info btn-block">
</form>
							
				
					</div>
				
				</div>
				<?php include ("contents/statics/script.php"); ?>
			</body>
			</html>