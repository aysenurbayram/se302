<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_blog.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Blog Yaz</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>Blog</span>
		</nav>
		<div class="row">
			<div class="col-md-1 col-xs-12"></div>
			<div class="col-md-9 col-xs-12">
				<?php
				$mail = $_SESSION['mail'];
				?>
				<form method="post" name ="form" action="#">
					<h3>Blog Yaz</h3>
					<hr/>
					<?php
					include "services/db_baglan.php";
					$sorgu = mysql_query("SELECT * FROM  `Member` WHERE mail='$mail'") ?>	
					<?php
					if($sorgu){
						while($duyuru = mysql_fetch_array($sorgu)){
							echo'
							<div id= "inform">
							<input type="text" name="Member_idMember" value="'.$duyuru['idMember'].'" placeholder="ID" id="cmt-name-inp" class="inp--text" style="border: none; background-color:white; color:transparent"  readonly>
							</div>';
						}
					} ?>
					<div id= "inform">
						Blog Başlığı
						<input type="text" name="title" value="" placeholder="" id="title" class="form-control">
					</div>
					<div id= "inform">
						Blog Kısa İçerik
						<br/>
						<textarea name="short_text"></textarea>
						<br/>
					</div>
					<div id= "inform">
						Blog İçeriği
						<br/>
						<textarea name="text"></textarea>
						<br/>
					</div>
					<?php 
					$tarih = date("Y-m-d H:i:s");
					echo'
					<div id= "inform">
					Tarih
					<input type="text" name="date" value="'.$tarih.'" placeholder="" id="date" class="form-control" style="background-color:white" readonly>
				</div>'; ?>
				<div id= "adres_inform">
					Blog Resmi
					<input type="text" name="picture" value="" placeholder="" id="picture" class="form-control">
					<iframe src="upload/upload.php" width="115%" height="690px"></iframe>
				</div>	
				<div id= "inform">
					Kategori
					<br/>
					<select name="category">
						<option value="0">------</option>
						<option value="saglikli_yasam">Sağlıklı Yaşam</option>
						<option value="spor">Spor</option>
						<option value="doga">Doğa</option>
						<option value="organik">Organik</option>
					</select>
				</div>
				<hr/>
				<input type="submit" value="Blog Yaz" class="" id="" name ="blog_yaz">
			</form>	
			
			<?php
						if(isset($_POST['blog_yaz']))
{ 	
			
			include "db_baglan.php";	
			
			$title = $_POST['title'];
			$short_text = $_POST['short_text'];
			$text = $_POST['text'];
			$date = $_POST['date'];
			$Member_idMember = $_POST['Member_idMember'];
			$picture = $_POST['picture'];
			$category = $_POST['category'];
			
	if((empty($short_text)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:write-blog.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız! Kısa açıklama yazısı giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($title)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:write-blog.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız! Blog başlığı giriniz");</script>';
		echo'</div>';
	}	
	if((empty($text)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:write-blog.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız! Blog içerik yazısı giriniz");</script>';
		echo'</div>';
	}	
	if((empty($date)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:write-blog.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız! Tarih bilgisi alınamadı");</script>';
		echo'</div>';
	}	
	if((empty($picture)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:write-blog.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız! Blog Resmi URL giriniz.");</script>';
		echo'</div>';
	}
	
	
	
	
	
	
	
	else{
		$sorgu = mysql_query("insert into Blog(title, short_text, text, date,Member_idMember, picture, category) 
		VALUES ('$title','$short_text','$text','$date','$Member_idMember','$picture','$category')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					
					header("Location:index.php");
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarılı!");</script>';
			 echo'<meta http-equiv="refresh" content="0;URL=blog.php">';
					echo'</div>';
			}
			else{
			echo '<script type="text/javascript">alert("Blog yazma işlemi başarısız!");</script>';

			}
	}
}
 			

?>
			
		</div>
	</div>
</div>
</div>
<?php include ("contents/statics/footer.php"); ?>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>